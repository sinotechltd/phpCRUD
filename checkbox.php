<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $datas = $_POST['data'];
    // echo $datas;
    $allData = implode(",", $datas);
    // echo $allData;

    $sql="insert into `multipledata` (checkBoxData) value ('$allData')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "inserted sucessfully";
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
    <title>checkbox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container  my-5">
        <form method="post">
            <div class="input-group-text">
                <input type="checkbox" name="data[]" value="Javascript">Javascript
            </div>
            <div class="input-group-text my-3">
                <input type="checkbox" name="data[]" value="HTML">HTML
            </div>
            <div class="input-group-text" my-3>
                <input type="checkbox" name="data[]" value="CSS">CSS
            </div>
            <button type="submit" class="btn btn-dark my-3" name="submit">Submit</button>
        </form>
    </div>

</html>