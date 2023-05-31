<?php  
   include 'conn.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display search data</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<?php 
$data=$_GET['data']; 
// echo $data;
$sql= "select * from `seriescrud` where id='$data'";
$result=mysqli_query($con,$sql);
   if($result){
    $row=mysqli_fetch_assoc($result);
    // echo $row['fname'];
    echo '<div class="container my-5">
    <div class="jumbotron">
      <h1 class="display-4 text-center text-success">'.$row['fname'].''.$row['lname'].'</h1>
      <p class="lead text-center text-danger">Your Email id is:'.$row['email'].'</p>
      <hr class="my-4 ">
      <a class="btn btn-dark btn-lg" href="search.php" role="button">Back</a>
    </div>
    </div>';
    

   }
?>

</body>
</html>
