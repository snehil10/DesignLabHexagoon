<?php
include('connection.php');
$sql="select username from teacher where username in (select teacher_id from student inner join courses on student.semester=courses.semester and student.stream=courses.department_id)";
$result=mysqli_query($con , $sql);
if(!$result)
{
	echo mysqli_error($con);
	die();
}
else
{
	$teacher_id=array();
	while($row = mysqli_fetch_assoc($result))
	{
		array_push($teacher_id,$row['username']);
	}
	echo $teacher_id;
}
?>