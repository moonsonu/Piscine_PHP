#!/usr/bin/env php
<?php
if ($argc == 5)
{
	$s1 = $argv[1];
	$s2 = $argv[2];
	$s3 = $argv[3];
	$s4 = $argv[4];

	if (!strcmp($s2, "key1:val1") && !strcmp($s3, "key2:val2"))
	{
		if (!strpos($s4, $s1) && strpos($s4, ":"))
		{
			$val = array();
			$val = explode(':', $s4);
			if (!strcmp($s1, $val[0]))
				echo "$val[1]\n";
		}
	}
}
?>
