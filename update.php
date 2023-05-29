<?php
include_once 'conn.php';

if (isset($_GET['updateid'])) {
$id = $_GET['updateid'];
$sql= "select * FROM `seriescrud` where id= $id";
$result= mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);
    $fname= $row['fname'];
    $lname= $row['lname'];
    $email= $row['email'];
    $mobile=$row['mobile'];
    $datas=$row['multipleData'];

if(isset($_POST['update'])){
    // $id = $_GET['updateid'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $mobile=$_POST['mobile'];
    $datas = $_POST['data'];

    // convert the data array into string
    $allData = implode(",", $datas);

    $sql= "update `seriescrud`  set fname= '$fname', lname='$lname', email='$email', mobile='$mobile', multipleData='$allData' where id='$id' ";
    $result= mysqli_query($con,$sql);

    if($result){
        header('location: read.php');
        // echo "updated successfully";
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
    <title>UPDATE DATA</title>
</head>

<body>
    <div class="container my-5">
        <form action="" autocomplete="off" method="post">
            <div class="form-group mb-3">
                <label> First Name</label>
                <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
            </div>
            <div class="form-group mb-3">
                <label> Last Name</label>
                <input type="text" class="form-control" name="lname"value="<?php echo $lname; ?>">
            </div>
            <div class="form-group mb-3">
                <label> Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group mb-3">
                <label> Mobile</label>
                <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>">
            </div>
            <div>
            <input type="checkbox" name="data[]" value="Javascript">Javascript
        <input type="checkbox" name="data[]" value="HTML">HTML
        <input type="checkbox" name="data[]" value="CSS">CSS
            </div>
            <button type="submit" class="btn btn-dark btn-lg my-3" name="update">Update</button>
            <button type="button" class="btn btn-dark btn-lg" name=""><a href="read.php">Back</a></button>


        </form>
    </div>
</body>

</html>
