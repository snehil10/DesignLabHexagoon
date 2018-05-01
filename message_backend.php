<?php
session_start();
include('connection.php');
$message=$_GET['q'];
$sql="insert into messages (sender_id,receiver_id,message_content,status) values($_SESSION['username'],$receiver_id,$message,0)";
$result=mysqli_query($con,$sql);
if(!$result){
	echo -1;
}
else{
	echo 1;
}
?>