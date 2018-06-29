#!/usr/bin/env php
<?php
if ($argc == 3)
{
	$file = fopen($argv[1], "r");
	$index_fr = fgets($file);
	$index_fr = explode(";", $index_fr);
	$index_en = array(0 => "last_name", 1 => "name", 2 => "mail", 3 => "IP", 4 => "pseudo");
	$index = array_replace($index_fr, $index_en);
	while (!feof($file))
	{
		$data[] = explode(";", fgets($file));
	}
	$n = array_search($argv[2], $index);
	if ($n === false)
		exit();
	foreach ($index as $i => $s)
	{
		$tmp = array();
		foreach ($data as $a)
		{
			if (isset($a[$n]))
				$tmp[trim($a[$n])] = trim($a[$i]);
		}
		$$s = $tmp;
	}
	$stdin = fopen("php://stdin", "r");
	while ($stdin && !feof($stdin))
	{
		echo "Enter your command:";
		$command = fgets($stdin);
		if ($command)
			eval($command);
	}
	fclose($stdin);
	echo "\n";
}
?>
