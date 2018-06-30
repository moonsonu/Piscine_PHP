<?php
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
?>
