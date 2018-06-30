<?php
session_start();
if ($_POST['submit'] != 'OK' || !$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'])
{
	echo "ERROR\n";
	exit();
}
if (file_exists("../private/passwd"))
{
	$unser = unserialize(file_get_contents("../private/passwd"));
	foreach ($unser as $i => $data)
	{
		if ($data['login'] == $_POST['login'] && hash("whirlpool", $_POST['oldpw']) == $data['passwd'])
		{
			$unser[$i]['passwd'] = hash("whirlpool", $_POST['newpw']);
			file_put_contents("../private/passwd", serialize($unser));
			echo "OK\n";
			exit();
		}
	}
}
echo "ERROR\n";
exit();
?>
