<?php include "db.php"; ?>
<?php 

    function display_data() {
        global $connection;

        $display_query = "SELECT * FROM login";
        $display_query_connection = mysqli_query($connection, $display_query);

        while($row = mysqli_fetch_assoc($display_query_connection)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }  
    }

    function update_data() {
        global $connection;

        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $id = $_POST['id'];

        $new_query = "UPDATE login SET ";
        $new_query .= "username = '$username', ";
        $new_query .= "gender = '$gender' ";
        $new_query .= "WHERE id = $id ";

        $update_query = mysqli_query($connection, $new_query);
        
        if(!$update_query) {
            die('query failed' . mysqli_error($connection));
        }
    }

    function delete_data() {
        global $connection;
        
        $id = $_POST['id'];

        $new_query = "DELETE FROM login ";
        $new_query .= "WHERE id = $id ";

        $update_query = mysqli_query($connection, $new_query);
        
        if(!$update_query) {
            die('query failed' . mysqli_error($connection));
        }
    }

?>