<?php
function auth($login, $passwd)
{
	$unser = unserialize(file_get_contents("../private/passwd"));
	foreach ($unser as $i => $value)
	{
		if ($value['login'] == $login && hash("whirlpool", $passwd) == $value['passwd'])
			return (TRUE);
	}
	return (FALSE);
}
?>
