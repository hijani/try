<?php 

    $display_query = "SELECT * FROM login";
    $display_query_connection = mysqli_query($connection, $hell);

    while($row = mysqli_fetch_assoc($display_query_connection)) {
        print_r($row);
    }

?>