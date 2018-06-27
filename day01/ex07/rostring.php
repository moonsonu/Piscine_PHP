#!/usr/bin/env php
<?php
if ($argv >1)
{
	for($i = 0; $i < $argc; $i++)
	{
		$str = trim(preg_replace('/\s+/', ' ',$argv[1]));
		$str = trim($str, " ");
		$array = explode(" ", $str);
	}
	$len = count($array);
	for ($i = 1; $i < $len; $i++)
	{
		echo "".$array[$i]." ";
	}
	echo "$array[0]\n";
}
?>
