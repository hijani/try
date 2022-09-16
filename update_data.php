<?php include "db.php"; ?>
<?php include "functions.php"; ?>


<?php 

    if(isset($_POST['submit'])) {

        update_data();
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>try login database</title>
</head>
<body>
    <h1 class="text-center">Try Login Database</h1>

    <form action="update_data.php" method="post">
        <div class="form-group">
            <input type="text" name="username" placeholder="Username" class="form-control">
        </div>
        <div class="form-group">
            <input type="number" name="gender" placeholder="Gender" class="form-control">
        </div>
        <select name="id" id="">
            <?php display_data() ?>
        </select>

        <input type="submit" name="submit" value="update"  class="form-control btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>