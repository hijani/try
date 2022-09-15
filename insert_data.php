<?php 
    global $connection;
    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $gender = $_POST['gender'];


        $insert_query = "INSERT INTO login(username, gender)";
        $insert_query .= "VALUES('$username', $gender)";
        $insert_query_connection = mysqli_query($connection, $insert_query);

        if(!$insert_query_connection) {
            die('connection error');
        }

    }

?>