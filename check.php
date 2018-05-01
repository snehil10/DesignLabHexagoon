<?php
include('connection.php');
$sql="select teacher_id from teacher where teacher_id in (select teacher_id from student inner join courses on student.semester=courses.semester)";
$result=mysqli_query($con , $sql);
if(!$result)
{
	echo "error";
	die();
}
else
{
	$teacher_id=array();
	while($row = mysqli_fetch_assoc($result))
	{
		array_push($teacher_id,$row['teacher_id']);
	}
	

}
?>