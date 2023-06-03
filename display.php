<?php 
    require_once 'operation.php';
    include 'conn.php';

if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $image=$_FILES['file'];

    // echo $username;
    // echo "</br>";
    // echo $mobile;
    // echo "</br>";
    // print_r($image);
    // echo "</br>";
    $imagefilename= $image['name'];
    // print_r($imagefilename);
    echo "</br>";
    $imagefileerror=$image['error'];
    // print_r($imagefileerror);
    // echo "</br>";
    $imagefiletemp=$image['tmp_name'];
    // print_r($imagefiletemp);
    // echo "</br>";

    $filename_separate=explode('.', $imagefilename);
    // print_r($filename_separate);
    // echo "</br>";
    // $file_extension=strtolower($filename_separate[1]);
    // print_r($file_extension);
    $file_extension=strtolower(end($filename_separate));
    // print_r($file_extension);

    $extension=array('jpeg','jpg','png');
    if(in_array($file_extension,$extension)){
        $upload_image='images/'.$imagefilename;

        move_uploaded_file($imagefiletemp,$upload_image);

        $sql="insert into `uploadimage` (name,mobile,image) values('$username','$mobile', '$upload_image')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</Strong> Data inserted successfully
          </div>';
        }else{
            die(mysqli_error($con));
        }
    }
}
   
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    img{
        width:100px
    }
  </style>
    <title>PHP IMAGE UPLOAD</title>
</head>

<body>
    <h1 class="text-center my-4">User Data</h1>
    <div class="container mt-5 d-flex justify-content-center">
    <table class="table table-bordered w-50 ">
  <thead  class="table-dark">
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Username</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $sql="select * from `uploadimage`";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $image=$row['image'];
            echo '<tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td><img src=\''.$image.'\' /></td>
          </tr>';
        }
        
        // echo $row['image'];
    ?>
 
  </tbody>
</table>
    </div>   

</body>
</html>