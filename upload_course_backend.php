<?php
include('connection.php');
if(isset($_POST['submit']))
{
	$course_id=$_POST['course_id'];
	$course_name=$_POST['course_name'];
	$teacher_id=$_POST['teacher_id'];
	$department=$_POST['department'];
	$semester=$_POST['semester'];
	$sql1="select course_id from courses where course_id='$course_id'";
	$result1=mysqli_query($con,$sql1);
	if(!$result1)
	{
		echo mysqli_error($con);
		exit();
	}
	else
	{
		if(mysqli_num_rows($result1)==0)
		{
			$sql2="insert into courses (course_id,teacher_id,course_name,department_id,semester) values ('$course_id','$teacher_id','$course_name','$department','$semester')";
			$result2=mysqli_query($con,$sql2);
			if(!$result2)
			{
				echo mysqli_error($con);
				exit();
			}
			else{
				echo "Done";
			}
		}
	}
}
?>