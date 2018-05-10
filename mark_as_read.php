<?php
session_start();
include('connection.php');
$sql4="update message set status=1 where receiver_id='".$_SESSION['username']."' and message_type='evaluation' and status=0";
$res=mysqli_query($con,$sql4);
if(!$res)
{
	echo mysqli_error($con);
}
else
{
	echo 1;
}
?>