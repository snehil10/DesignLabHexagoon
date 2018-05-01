<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
	$table_name=$_POST["option"];
	$username=$_POST["username"];
	$password=$_POST["psw"];
	$remmember=$_POST["remmember"];
	if($remmember=="on")
	{
		$cookie_name="user";
		$cookie_value=$username;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
	}
	$sql="select username,password from ".$table_name." where username='$username' && password='$password'";
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
		if($table_name=='student')
			header('location:student_display.php');
	}
	if(mysqli_num_rows($result)==0)
	{
		$_SESSION['loginstatus']=1;
		header('location:index.php');
	}
}
?>