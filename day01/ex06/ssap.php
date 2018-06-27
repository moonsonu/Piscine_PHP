#!/usr/bin/env php
<?php
function ft_split($s)
{
	$split = array_filter(explode(" ", $s));
	sort($split);
	return ($split);
}

if ($argc > 1)
{
	$a = array();
	$arraynum = count($argv);
	for ($i = 1; $i < $arraynum; $i++)
	{
		$str = preg_replace('/\s+/', ' ', $argv[$i]);
		$str = trim($str, " ");
		$result = ft_split($str);
		$result_len = count($result);
		for ($j = 0; $j < $result_len; $j++)
		{
			array_push($a, $result[$j]);
		}
	}
	sort($a);
	$len = count($a);
	for ($i = 0; $i < $len; $i++)
	{
		echo ("".$a[$i]."");
		echo "\n";
	}
}
?>
