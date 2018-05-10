<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
	$username=$_POST["username"];
	$password=$_POST["psw"];
	$sql="select username,password from admin where username='$username' && password='$password'";
	$result=mysqli_query($con , $sql);
	if(!$result)
	{
		echo "Could not successfully run query ($sql) from DB: " . mysqli_error($con);
		exit;
	}
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username']=$row['username'];
		if(isset($_POST["remmember"]))
		{
		$cookie_name="user";
		$cookie_value=$username;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
		}
		header('location:admin_uploadstudents.php');
	}
	if(mysqli_num_rows($result)==0)
	{
		$_SESSION['loginstatus']=1;
		header('location:index.php');
	}
}
?>