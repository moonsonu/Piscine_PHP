#!/usr/bin/env php
<?php
if ($argc == 2)
{
	if (!preg_match("~[0-9]~", $argv[1]))
	{
		echo "Syntax Error\n";
		exit();
	}
	$str = trim($argv[1]);
	$str = str_replace(' ', '', $str);
	$str = str_replace('\t', '', $str);

	$first = intval($str);
	$exp = substr($str, strlen($first), 1);
	$last = substr($str, strlen($first) + strlen($exp));
	
	if (!is_numeric($last))
	{
		echo "Syntax Error\n";
		exit();
	}
	
	if ($exp == "+")
	{
		$result = $first + $last;
	}
	else if ($exp == "-")
	{
		$result = $first - $last;
	}
	else if ($exp == "*")
	{
		$result = $first * $last;
	}
	else if ($exp == "/")
	{
		$result = $first / $last;
	}
	else if ($exp == "%")
	{
		$result = $first % $last;
	}
	else
	{
		echo "Syntac Error\n";
		exit();
	}
	echo "$result\n";
}
else
	echo "INCORRECT PARAMETERS\n";
?>
