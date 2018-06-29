#!/usr/bin/env php
<?php
date_default_timezone_set('America/Los_Angeles');
$file = fopen("/var/run/utmpx", "r");
$u = array();
while ($utmpx = fread($file, 628))
{
	$unpack = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $utmpx);
	print_r($unpack);
	if ($unpack['e'] == 7)
		$u[$unpack['c']] = $unpack;
}
ksort($u);
foreach ($u as $tab)
{
	if ($tab['e'] == 7)
	{
	echo (trim($tab['a']));
	echo "    ";
	echo (trim($tab['c']));
	echo "  ";
	echo date("M", $tab["f1"]);
	echo " ";
	echo date("j", $tab["f1"]);
	echo " ";
	echo date("H:i", $tab["f1"]);
	echo "\n";
	}
}
?>
