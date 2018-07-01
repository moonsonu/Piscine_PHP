<?php
session_start();
function auth($login, $passwd)
{
	$user_info = unserialize(file_get_contents("data/user.txt"));
	$hash_passwd = hash("md5", $passwd);
	foreach ($user_info as $user)
	{
		if ($user['login'] == $login && $user['passwd'] == $hash_passwd)
			return TRUE;
	}
	return FALSE;
}
if (auth($_POST['login'], $_POST['passwd']))
{
	$_SESSION['logged_on_user'] = $_POST['login'];
	include 'shop_log.php';
}
else
	include 'login.html';
?>
