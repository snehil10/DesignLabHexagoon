<?php
include('connection.php');
$table="8_CSE";
$sql="SELECT * FROM ".$table;
$query=mysqli_query($con,$sql);    
$num=mysqli_num_fields($query);
echo $num;
?>