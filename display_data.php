<?php 

    
    $display_query = "SELECT * FROM login";
    $display_query_connection = mysqli_query($connection, $hell);

    function display_data() {
        while($row = mysqli_fetch_assoc($display_query_connection)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

?>