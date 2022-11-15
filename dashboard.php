<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
header('location:logout.php');
} else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
 
<body>
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">       
<div class="wrapper wrapper--w680">
<div class="card card-1">              
<div class="card-body">
<?php
$uid=$_SESSION['uid'];
$ret=mysqli_query($con,"select FULLNAME from tbleuser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FULLNAME'];
 
?>
<h4 style="color: blue; text-align: center;">Welcome !! <?php echo $name;?></h4>
</div>
</div>
<a href="logout.php" class="btn btn-outline btn-default">Logout</a>
</div>
 
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>
 
</html>
<!-- end document-->
<?php }  ?>
?>