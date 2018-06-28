#!/usr/bin/env php
<?php
if ($argc == 4)
{
	$a = trim($argv[1]);
	$b = trim($argv[2]);
	$c = trim($argv[3]);

	if ($b == "+")
	{
		$result = $a + $c;
	}
	else if ($b == "-")
	{
		$result = $a - $c;
	}
	else if ($b == "*")
	{
		$result = $a * $c;
	}
	else if ($b == "/")
	{
		$result = $a / $c;
	}
	else if ($b == "%")
	{
		$result = $a % $c;
	}
	echo "$result\n";
}
else
	echo "INCORRECT PARAMETERS\n";
?>
