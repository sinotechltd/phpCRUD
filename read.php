<?php
include_once 'conn.php'
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>DISPLAY DATA</title>
</head>
<body>
    <div class="container my-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Subjects</th>
      <th scope="col">Gender</th>
      <th scope="col">County</th>
      <th scope="col">Operators</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    // select query 
    $sql= "select * FROM `seriescrud`";
    $result= mysqli_query($con,$sql);

    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
    //  $fname= $row['fname'];
    //  $lname= $row['lname'];
    //  $email= $row['email'];
    //  $mobile= $row['mobile'];

     echo '  <tr>
     <th scope="row">'.$row['id'].'</th>
     <td>'.$row['fname'].'</td>
     <td>'.$row['lname'].'</td>
     <td>'.$row['email'].'</td>
     <td>'.$row['mobile'].'</td>
     <td>'.$row['multipleData'].'</td>
     <td>'.$row['gender'].'</td>
     <td>'.$row['place'].'</td>
    <td>
    <a href="update.php?updateid='.$id.'" class="btn btn-dark">Update</a>
    <a href="delete.php?deleteid='.$id.'" class="btn btn-danger">Delete</a>
  </td>
   </tr>';
}
    ?>
  
  </tbody>
</table>
    </div>
</body>
</html>
