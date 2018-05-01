<?php
session_start();
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email_id=$_POST['email_id'];
	$name=$_POST['name'];
	$phone_number=$_POST['phone_number'];
	$sql="insert into teacher (username,name,password,phone_number,email_id) values ('$username','$name',''$password','$phone_number','$email_id')";
	$result=mysqli_query($con,$sql)
	if(!$result)
	{
		echo mysqli_error($con);
		exit();
		
	}
	else
	{
		echo "Done";
	}
}
?>