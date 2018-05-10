<?php
include('connection.php');
session_start();
$phone_no=$_POST['phone'];

$email=$_POST['email'];
$password=$_POST['password'];
$sql="update parents set email_id='".$email."',phone_no='".$phone_no."',password='".$password."' where username='".$_SESSION['username']."'";
$result=mysqli_query($con,$sql);
if(!$result)
{
	echo mysqli_error($con);
	exit();
}
else
{
	echo "update successful";
}
?>