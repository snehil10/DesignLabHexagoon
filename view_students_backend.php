<?php
include('connection.php');
session_start();
$sql="select st.username,st.name,st.class_roll from student as st join courses on st.semester=courses.semester and st.stream=courses.department_id where courses.teacher_id='".$_SESSION['username']."'";
$res=mysqli_query($con,$sql);
if(!$res)
{
	echo mysqli_error($con);
}
?>