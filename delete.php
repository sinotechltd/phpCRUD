<?php 
    include 'conn.php';
    
     $id=$_GET['deleteid'];
    //  echo $id;

    $sql="delete from `seriescrud` where id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        header("location: read.php");
        // echo "Deleted Successfully";
    } else{
        die(mysqli_error($conn));
    }
?>