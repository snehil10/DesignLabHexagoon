<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
	$table_name=$_POST["option"];
	$username=$_POST["username"];
	$password=$_POST["psw"];
	$sql="select username,password from ".$table_name." where username='$username' && password='$password'";
	$result=mysqli_query($con , $sql);
	if(!$result)
	{
		$_SESSION['loginstatus']=0;
		header('location:index.php');
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
		if($table_name=='student')
			header('location:student_display.php');
		if($table_name=='teacher')
			header('location:teacher_display.php');
		if($table_name=='parents')
			header('location:parent_display.php');
	}
	if(mysqli_num_rows($result)==0)
	{
		$_SESSION['loginstatus']=1;
		header('location:index.php');
	}
}
?>