<?php
include('connection.php');
$sql="insert into 8_cse (CS670,CS999,exam_type,student_id) values('60','89','Semester','st_16162')";
$result=mysqli_query($con,$sql);
if(!$result)
echo mysqli_error($con);
?>