<?php
$dbHost="localhost";
$dbUser="root";
$dbPassword="";
$dbName="cbait_batch_four_test";
$connection= mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);

$msg="";

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phoneNo'];
    $email=$_POST['emailID'];

    $insertSQL="INSERT INTO `students`(`name`, `phone`, `email`) VALUES ('$name','$phone','$email')";
    $run=mysqli_query($connection,$insertSQL);

    if ($run==true){
        $msg="Data Successfully Submitted";
    }
    else{
        $msg="Failed ! Please Try Again";
    }

}
    
$selectSQL="SELECT * FROM `students`";
$runSelect=mysqli_query($connection,$selectSQL);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Reg Form</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 align="center">Registration Form</h3>

            <div class="alert alert-success" role="alert">
                <?php echo $msg; ?>
            </div>

        </div>
    </div>
    <form method="post" action="">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Phone No</label>
                    <input name="phoneNo" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input name="emailID" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-6 pt-4">
                <div class="form-group">
                    <input name="submit" value="SEND" class="form-control btn btn-success" type="submit">
                </div>
            </div>

        </div>
    </form>

    <div class="row">
        <div class="col-md-12">
            <h3 class="mt-4 text-success" align="center"> Student Data</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>

                    <?php while($data=mysqli_fetch_assoc($runSelect)){ ?>
                    <tr>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['phone']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
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