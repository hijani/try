<?php

    global $connection;
    $display_query = "SELECT * FROM login";
    $display_query_connection = mysqli_query($connection, $display_query);

    while($row = mysqli_fetch_assoc($display_query_connection)) {
        ?>
        <pre>
        <?php 
            print_r($row);
        ?>

        <?php
    }

?>