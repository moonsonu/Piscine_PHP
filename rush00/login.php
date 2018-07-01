<?php
session_start();

function auth($login, $passwd)
{
	echo "2\n";
	$unser = unserialize(file_get_contents("../private/passwd"));
	foreach ($unser as $i => $value)
	{
	echo "3\n";
		if ($value['login'] == $login && hash("whirlpool", $passwd) == $value['passwd'])
			return (TRUE);
	}
	return (FALSE);
}

if (auth($_GET['login'], $_GET['passwd']))
{
	$_SESSION['loggued_on_user'] = $_GET['login'];
	echo "OK\n";
}
else
{
	$_SESSION = "";
	echo "ERROR\n";
}
?>
