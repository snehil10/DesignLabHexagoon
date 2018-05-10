<?php
session_start();
include('connection.php');
$message=$_GET['q'];
$receiver_id=$_GET['r'];
$sql="insert into message (sender_id,receiver_id,message_content,status,message_type) values('".$_SESSION['username']."','".$receiver_id."','$message','0','chat')";
$result=mysqli_query($con,$sql);
if(!$result){
	echo mysqli_error($con);
	exit();
}
else{
	echo -1;
}
?>