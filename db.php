<?php 

    $connection = mysqli_connect('localhost', 'root', '', 'try');
            if(!$connection) {
                die("connection error" . " " . mysqli_connect_error());
            } else {
                echo "connected";
            }


?>