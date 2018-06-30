<?php
session_start();
if ($_POST['submit'] != 'OK' || !$_POST['login'] || !$_POST['passwd'])
{
	echo "ERROR\n";
	exit();
}
if (file_exists("../private/passwd"))
{
	$unser = unserialize(file_get_contents("../private/passwd"));
	foreach ($unser as $data)
	{
		foreach ($data as $i => $value)
		{
			if ($i == "login" && $value == $_POST['login'])
			{
				echo "ERROR\n";
				exit();
			}
		}
	}
}
else if (!file_exists("../private"))
	mkdir("../private");
$_POST['passwd'] = hash("whirlpool", $_POST['passwd']);
$unser[] = array("login" => $_POST['login'], "passwd" => $_POST['passwd']);
file_put_contents("../private/passwd", serialize($unser));
echo "OK\n";
?>
