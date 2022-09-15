<?php

    global $connection;
    if (isset($_POST['submit'])) {    

        // $display_query = "SELECT * FROM login";
        $hell = "select * from login";
        $display_query_connection = mysqli_query($connection, $hell);
        
        while($row = mysqli_fetch_assoc($display_query_connection)) {
            print_r($row);
        }
    }

?>