<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
	$teacher_id=$_POST['teacher_id'];
	$q1=$_POST['q1'];
	$q2=$_POST['q2'];
	$q3=$_POST['q3'];
	$q4=$_POST['q4'];
	$q5=$_POST['q5'];
	$q6=$_POST['q6'];
	$q7=$_POST['q7'];
	$q8=$_POST['q8'];
	$q9=$_POST['q9'];
	$q10=$_POST['q10'];
	$q11=$_POST['q11'];
	$q12=$_POST['q12'];
	$q13=$_POST['q13'];
	$message=$_POST['message'];
	$sql="update teacher_evaluation set no_of_students=no_of_students+1,eval_1=eval_1+".$q1.",eval_2=eval_2+".$q2.",eval_3=eval_3+".$q3.",eval_4=eval_4+".$q4.",eval_5=eval_5+".$q5.",eval_6=eval_6+".$q6.",eval_7=eval_7+".$q7.",eval_8=eval_8+".$q8.",eval_9=eval_9+".$q9.",eval_10=eval_10+".$q10.",eval_11=eval_11+".$q11.",eval_12=eval_12+".$q12.",eval_13=eval_13+".$q13." where teacher_id='".$teacher_id."'";
	$result=mysqli_query($con,$sql);
	if(!$result)
	{
		echo mysqli_error($con);
		exit();
	}
	else{
		if($message!="")
		{
			$sql2="insert into message (sender_id,receiver_id,message_content,message_type,status) values ('".$_SESSION['username']."','$teacher_id','$message','evaluation',0)";
			$result2=mysqli_query($con,$sql2);
			if(!$result2)
			{
				header("location:failure.php");
			}
			else
			{
				header("location:success.php");
			}
				
		}
		header("location:success.php");
	}
	
	
}
?>