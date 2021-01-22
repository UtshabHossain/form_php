<?php
$dbHost="localhost";
$dbUser="root";
$dbPassword="";
$dbName="h_table";
$connection= mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);


if (isset($_POST['btnsubmit'])){
    $name=$_POST['namen'];
    $date=$_POST['daten'];
    $category=$_POST['categoryn'];


    $uniqueID= date("Y-M-D-H-i-s");
    $imageOldName= $_FILES['imagen']['name'];
    $imageNewName= $uniqueID.$imageOldName;
    $image_temp= $_FILES['imagen']['tmp_name'];
    move_uploaded_file($image_temp,"image/$imageNewName");

    $insertSQL="INSERT INTO `first_dashboard`(`name`, `date`, `category`, `img`) VALUES ('$name','$date','$category','$imageNewName')";
    $runSQL=mysqli_query($connection,$insertSQL);
    if ($runSQL==true){
        header('location:input.php?massage=Successful');
    }
    else{
        header('location:input.php?massage=Fail');
    }
}



?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Input Page</title>
</head>
<body>

    <div class="row">
        <div class="col-md-2 sideNav">
                <h4 class="DashboardText">Dashboard</h4>
            <div class="row">
                <div class="col-md-12">
                    <a href="view.php?" class="btn btn-success btnstyle">VIEW</a>
                </div>
                <div class="col-md-12">
                    <a href="input.php?" class="btn btn-success btnstyle">INPUT</a>
                </div>
                <div class="col-md-12">
                    <a href="#" class="btn btn-success btnstyle">Coming</a>
                </div>
                <div class="col-md-12">
                    <a href="#" class="btn btn-success btnstyle">Coming</a>
                </div>
                <div class="col-md-12">
                    <a href="#" class="btn btn-success btnstyle">Coming</a>
                </div>
            </div>
        </div>
        <div class="col-md-10 containNav">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fontStyle">Input Your Data</h2>
                </div>
            </div>
            <form action="input.php" method="post" enctype="multipart/form-data">
                <div class="row newRowMargin">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="namen" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date</label>
                            <input name="daten" class="form-control" type="date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <input name="categoryn" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Image Upload</label>
                            <input name="imagen" class="form-control" type="file">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="btnsubmit" onclick="alert('Data Insert Successfully !')" class="btn btn-success" type="submit" value="SUBMIT">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>