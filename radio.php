<?php 
    include 'conn.php';

    if(isset($_POST['submit'])){

        $gender=$_POST['gender'];
        $sql= "insert into `radioData` (gender) values('$gender')";

        $result=mysqli_query($con,$sql);

        if($result){
            echo "data of radio buttons inserted successfully";
        } else{
            die(mysqli_error($con));
        }

    }

?> 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>RADIO DATA</title>
</head>
    <div class="container my-5">
        <form action="" method="post">
            <div>
                <input type="radio" name="gender" value="male">Male
            </div>
            <div>
                <input type="radio" name="gender" value="female">Female
            </div>
        <button type="submit" my-3 class="btn btn-dark" name="submit">Submit</button>
        </form>

    </div>
<body>
</body>
</html>