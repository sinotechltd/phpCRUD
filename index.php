<?php
include_once 'conn.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $datas = $_POST['data'];
    $gender = $_POST['gender'];
    $place= $_POST['place'];

    // convert the data array into string
    $allData = implode(",", $datas);

    // insert querry 
    $sql = "insert into `seriescrud` (fname,lname,email, mobile,multipleData,gender,place) Values ('$fname','$lname','$email','$mobile','$allData','$gender','$place')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location: read.php');
        echo 'Data Inserted successfully';
    } else {
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
    <title>PHP CRUD SERIES</title>
</head>

<body>
    <div class="container my-5">
        <form method="post" autocomplete="off">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" placeholder="enter your first name" name="fname">
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" placeholder="enter your last name" name="lname">
            </div>
            <div class="mb-3">
                <label class="form-label"> Email</label>
                <input type="email" class="form-control" placeholder="enter your email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" placeholder="enter your mobile number" name="mobile">
            </div>
            <div>
                <input type="checkbox" name="data[]" value="Javascript">Javascript
                <input type="checkbox" name="data[]" value="HTML">HTML
                <input type="checkbox" name="data[]" value="CSS">CSS
            </div>
            <div class="my-3">
                Gender:
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
            </div>
            <div class="my-3">

                <select name="place" id="">
                    <option value="">Select City</option>
                    <option value="Meru">Meru</option>
                    <option value="Machcakos">Machcakos</option>
                    <option value="Kisii">Kisii</option>
                    <option value="Nyamira">Nyamira</option>
                </select>
            </div>
            <button class="btn btn-dark btn-lg my-3" name="submit">SUbmit</button>
    </div>
    </form>
</body>

</html>