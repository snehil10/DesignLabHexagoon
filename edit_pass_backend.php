<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
	$username=$_SESSION['username'];
	$table_name=$_SESSION['tablename'];
	$password=$_POST['newpass'];
	$sql="update $table_name set password='".$password."' where username='".$username."'";
	$result=mysqli_query($con,$sql);
	if(!$result)
	{
		echo mysqli_error($con);
		die();
	}
	else
	{
		session_destroy();
		header("location:success.php");
	}
}
?>