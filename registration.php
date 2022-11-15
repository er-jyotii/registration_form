<?php
include('dbconnection.php');
if(isset($_POST[submit]))
{
    $fname =$_POST['fname'];
    $contactno =$_POST['contactno'];
    $email =md5($_POST['email']);
    $password =$_POST('password');
    $ret= mysqli_query($con,"select email from tbleuser where EMAIL= '$email' || MOBILENO ='$contactno'");
    $result=mysqli_fetch_array($ret);
    if($result > 0){
        echo "<script>alert('This email or Contact Number already associated with another account');</script>";
    }
    else{
        $query = mysqli_query($con,"insert into tbleuser (FULLNAME, MOBILENO, EMAIL, PASSWSORD)values('$fname','$contactno','$email','$password')");
    }
    if($query){
        echo "<script>alert('You have successfully registered');</script>";

        echo "<script>window.location.href ='sign.php'</script>";
    }
    else{
        echo "<script>alert('Something Went Wrong. Please try again');</script>";

        echo "<script>window.location.href ='reges.php'</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <title>Document</title>
</head>
<body>
<h2 class="title">Registration Form</h2>
<form method="POST">
<div class="input-group<input class="input--style-1 type="text" placeholder="NAME" name="fname" required="true">
</div>
                        
<div class="row row-space">
<div class="col-2">
<div class="input-group">
<input class="input--style-1" type="text" placeholder="Mobile Number" name="contactno" required="true" maxlength="10" pattern="[0-9]+"> 
</div>
</div>
</div>
                        
<div class="input-group">
<div class="rs-select2 js-select-simple select--no-search">
<input class="input--style-1" type="email" placeholder="Email Address" name="email" required="true"> 
</div>
</div>
 
<div class="row row-space">
<div class="col-2">
<div class="input-group">
<input type="password" value="" class="input--style-1" name="password" required="true" placeholder="Password">
</div>
</div>
</div>
 
<div class="p-t-20">
<button class="btn-primary" type="submit" name="submit">Submit</button>
</div>
<br>
<a href="sign.php" style="color: red">Already have an account? Signin</a>
 </form>
</body>
</html>