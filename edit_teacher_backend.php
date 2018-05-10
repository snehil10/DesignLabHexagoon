<?php
include('connection.php');
session_start();
$mobile_no=$_POST['phone'];

$email=$_POST['email'];
$password=$_POST['password'];
$sql="update teacher set email_id='".$email."',mobile_number='".$mobile_no."',password='".$password."' where username='".$_SESSION['username']."'";
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