<?php
include('connection.php');
session_start();
$phone_no=$_POST['phone'];

$email=$_POST['email'];
$password=$_POST['password'];
$sql="update parents set email_id='".$email."',mobile_number='".$phone_no."',password='".$password."' where username='".$_SESSION['username']."'";
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