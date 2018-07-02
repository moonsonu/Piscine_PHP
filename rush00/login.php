<?php
session_start();
include "connection.php";
$passwd = hash("md5", $_POST["passwd"]);
$login = $_POST["login"];
$sql = "SELECT *  FROM `user` WHERE `login` = '{$login}' and `passwd` = '{$passwd}'";
$ur = mysqli_query($conn, $sql);
$signin = mysqli_fetch_assoc($ur);
if ($signin > 0)
{
	$_SESSION['logged_on_user'] = $login;
	include 'index.php';
}
else
	include 'login.html';
?>
