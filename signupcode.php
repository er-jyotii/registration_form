<?php
//session_start();
//error_reporting(0);
include('dbconnection.php');
/*if(isset($_POST['login']))
{
 $emailcon=$_POST['emailcont'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"select ID from tbleuser where  (EMAIL='$emailcon' || MOBILENO='$emailcon') && PASSWORD='$password' ");
$ret=mysqli_fetch_array($query);
if($ret>0){
$_SESSION['uid']=$ret['ID'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
  }else{
 echo "<script>alert('Invalid Details');</script>";
 }}*/

 $email=$_POST['emailcont'];
 //echo $email;
 $password=$_POST['password'];
 //echo $password;
 if(isset($_POST['emailcont'])){
    $email=$_POST['emailcont'];
    $password=$_POST['password'];
    $query="select * from tbleuser where EMAIL='$email' and PASSWORD='$password'";
   // echo $query;
   $res=mysqli_query($con,$query);
   if(mysqli_num_rows($res)==1){
    echo "done !";
    //header('Location:dashboard.php');
   }
   else{
     echo "error!";
   
   header('Location:sign.php');
   }
 }
 ?> 