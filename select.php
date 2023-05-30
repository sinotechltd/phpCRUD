<?php 
     include 'conn.php';
if(isset($_POST['submit'])){
    $place=$_POST['place'];

    $sql="insert into `selectdata` (place) values('$place')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo 'data inserted successfully';
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
     <div class="container my-5" >
        <div>
        <form method="post">
        <select name="place" id="">
            <option value="">Select City</option>
            <option value="Meru">Meru</option>
            <option value="Machcakos">Machcakos</option>
            <option value="Kisii">Kisii</option>
            <option value="Nyamira">Nyamira</option>
        </select>
</div>
<div class="my-5">
<button type="submit" my-3 class="btn btn-dark my-5" name="submit">Submit</button>
</div>
</form>
     </div>

   
</body>
</html>