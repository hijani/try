<?php include "db.php"; ?>
<?php
    global $connection;
    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $gender = $_POST['gender'];

        function showAllData() {
            global $connection;
            $display_query = "SELECT * FROM login";
            $display_query_connection = mysqli_query($connection, $display_query);

        
            while($row = mysqli_fetch_assoc($display_query_connection)) {
                $id = $row['id'];
                echo "<option value='$id'>$id</option>";
            }
        }
    }

?>