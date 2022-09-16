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

?>