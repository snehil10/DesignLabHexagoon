<?php
include('connection.php');
session_start();
$ph_no=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="update student set email_id='".$email."',address='".$address."',mobile_number='".$ph_no."',password='".$password."' where username='".$_SESSION['username']."'";
$result=mysqli_query($con,$sql);
if(!$result)
{
	header("location:faliure.php");
}
else
{
	header("location:success.php");
}
?>