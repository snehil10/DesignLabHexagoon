<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
	$table_name=$_POST["option"];
	$email=$_POST["email"];
	$number=$_POST["number"];
	$sql="select username,password from ".$table_name." where email_id='$email' && mobile_number='$number'";
	$result=mysqli_query($con , $sql);
	if(!$result)
	{
		echo "Could not successfully run query ($sql) from DB: " . mysqli_error($con);
		exit;
	}
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		$_SESSION['tablename']=$table_name;
		$_SESSION['username']=$row['username'];
		header('location:edit_pass.php');
	}
	if(mysqli_num_rows($result)==0)
	{
		$_SESSION['fgtpwd']=1;
		header('location:forgotpassword.php');
	}
}
?>
