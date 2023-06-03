<?php 
    require_once 'operation.php';
    include 'conn.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP IMAGE UPLOAD</title>
</head>

<body>
    <h1 class="text-center my-3">Registration Form</h1>
    <div class="container d-flex justify-content-center" >
        <form action="./display.php" method="post" class="w-50" enctype="multipart/form-data">
            <?php  inputFields("username","username","","text")?>
            <?php  inputFields("Mobile","mobile","","text")?>
            <?php  inputFields("","file","","file")?>
            <button class="btn btn-dark" type="submit" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>