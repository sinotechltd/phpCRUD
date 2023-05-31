<?php 
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search data</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5">
        <form action="" method="post">
            <input type="text" placeholder="search data" name="search">
            <button class="btn btn-dark" name="submit">Search</button>
        </form>
        <div class="container my-5">
            <table class="table">
                <?php 
                   if(isset($_POST['submit'])){
                    $search=$_POST['search'];

                    $sql="select * from `seriescrud` where id like '%$search%' or fname like '%$search%' or lname like '%$search%' ";

                    $result=mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0){

                        echo '<thead>
                        <tr> 
                        <th>Sl no</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <tr>
                        </thead>
                        ';
                        // accessing data from the database
                        while($row=mysqli_fetch_assoc($result)){
                        echo '<tbody>
                           <tr>
                           <td><a href="searchData.php?data='.$row['id'].'">'.$row['id'].'</a></td>
                           <td>'.$row['fname'].'</td>
                           <td>'.$row['lname'].'</td>
                           </tr>
                           </tbody> 
                        ';
                    };
                }else{
                        echo '<h2 class="text-danger">Data not Found</h2>';
                    }

                  
                   } 
                ?>
               
            </table>
        </div>
    </div>
</body>
</html>