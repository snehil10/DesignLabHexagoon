<?php
session_destroy();
$cookie_name="user";
$res = setcookie($cookie_name, '', time() - 3600);
header('location:index.php');
?>