<?php
include 'connection.php';

$selectSQL="SELECT * FROM `first_dashboard`";
$selectrun=mysqli_query($connection,$selectSQL);

if (isset($_POST['DeleteBtn'])){
    $ID=$_GET['id'];
    $imageName=$_GET['image'];

    unlink("image/$imageName");

    $deleteSQL="DELETE FROM `first_dashboard` WHERE `id`='$ID'";
    $runDelete=mysqli_query($connection,$deleteSQL);
    if ($runDelete==true){
        header('location:view.php?message=Delate Success');
    }
    else{
        header('location:view.php?message=Failed');
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

    <title>view page</title>
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
                <h2 class="fontStyle">View Your Data</h2>
            </div>

            <div class="container">
                <div style="margin-top: 30px;" class="row">
                    <div class="col-md-12">
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php while($data=mysqli_fetch_assoc($selectrun)){ ?>
                                <tr>
                                    <td><img style="height: 100px;width: 100px;" src="image/<?php echo $data['img']?>"></td>
                                    <td><?php echo $data['name']; ?></td>
                                    <td><?php echo $data['date']; ?></td>
                                    <td><?php echo $data['category']; ?></td>
                                    <td>
                                        <div class="row">
                                            <a style="margin-left: 15px;" href="edit.php?id=<?php echo $data['id']?>" class="btn btn-success">EDIT</a>
                                            <form action="view.php?id=<?php echo $data['id']?>&image=<?php echo $data['img']?>" method="post"><input onclick="return confirm('Do you want to delate ?')" style="margin-left: 15px;" name="DeleteBtn" class="btn btn-danger" value="DELETE" type="submit"></form>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

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