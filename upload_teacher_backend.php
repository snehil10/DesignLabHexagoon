<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email_id=$_POST['email_id'];
	$name=$_POST['name'];
	$mobile_number=$_POST['phone_number'];
	$sql="insert into teacher (username,name,password,mobile_number,email_id) values ('$username','$name','$password','$mobile_number','$email_id')";
	$result=mysqli_query($con,$sql);
	if(!$result)
	{
		echo mysqli_error($con);
		exit();
		
	}
	else
	{
		$sql2="INSERT INTO teacher_evaluation(teacher_id,no_of_students,eval_1,eval_2,eval_3,eval_4,eval_5,eval_6,eval_7,eval_8,eval_9,eval_10,eval_11,eval_12,eval_13) VALUES('$username',0,0,0,0,0,0,0,0,0,0,0,0,0,0)"; 
		$result2=mysqli_query($con,$sql2);
		if(!$result2)
		{
			echo mysqli_error($con);
			exit();
		}
		else{
			header("location:success.php");
		}
	}
}
?>