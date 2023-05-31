<?php 
    include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5">
    <table class="table">
  <thead class="bg-dark text-light">
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="select * from `seriescrud`";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        // echo $num;
        $numberpages=2;
        $totalPages=ceil($num/$numberpages);
        // echo $totalPages;
        // create pagination buttons
        for($btn=1;$btn<=$totalPages;$btn++){
            echo '<button class="btn btn-dark mb-3 mx-1"><a href="pagination.php?page='.$btn.'" class="text-light">'.$btn.'</a></button>';
        }
        if(isset($_GET['page'])){
            $page=$_GET['page'];
            // echo $page;
        }else{
            $page=1;
        }
        // 1-----> 0,3
        // 2------>3,3
        // 3------->6,3
        // (pnum-1)*$numberpages
         
        $startinglimit=($page-1)*$numberpages;
        $sql="select * from `seriescrud` LIMIT ".$startinglimit.','.$numberpages;
        
        $result=mysqli_query($con,$sql);

        while($row=mysqli_fetch_assoc($result)){
            echo '
            <tr>
            <th scope="row">'.$row['id'].'</th>
            <td>'.$row['fname'].'</td>
            <td>'.$row['lname'].'</td>
            <td>'.$row['mobile'].'</td>
          </tr>
            
            ';

        }
    ?> 
  </tbody>
</table>
    </div>
</body>
</html>