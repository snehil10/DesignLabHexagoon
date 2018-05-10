<?php
session_start();
$cookie_name="user";
$res = setcookie($cookie_name,"", time()-3600,'/');
session_destroy();
header('location:index.php');
?>