<?php
session_start();
if ($_POST["submit"] == "DELETE ACCOUNT")
{
include "connection.php";
$login = $_SESSION['logged_on_user'];
$sql = "DELETE FROM `user` WHERE `login` = '{$login}'";
mysqli_query($conn, $sql);
$_SESSION['logged_on_user'] = "";
include 'index.php';
}
?>

<HTML>
	<HEAD>
		<link rel="stylesheet" type="text/css" href="main.css">
		<TITLE>login</TITLE>
	</HEAD>
	<BODY bgcolor="black">
		<A HREF="index.php"><IMG id="logo" SRC="./42_logo_white.png"></A>
		<H1 class="title">ACCOUNT</H1>
		<DIV class="login">
		<form action="account.php" method="POST">
			<INPUT class="button" type="submit" name="submit" value="DELETE ACCOUNT"/>
		</form>
			</DIV>
	</BODY>
</HTML>
