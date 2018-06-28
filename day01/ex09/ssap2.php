#!/usr/bin/env php
<?php
function ft_split($s)
{
	$split = array_filter(explode(" ", $s));
	sort($split);
	return ($split);
}

function ft_ssap2($s1, $s2)
{
	$a = str_split(strtolower(($s1)));
	$b = str_split(strtolower(($s2)));
	$i = -1;
	while ($a[++$i] && $b[$i])
	{
		if (ctype_alpha($a[$i]))
		{
			if (ctype_alpha($b[$i]) && $a[$i] != $b[$i])
				return ($a[$i] > $b[$i]);
			else if (!ctype_alpha($b[$i]))
				return 0;
		}
		else if (is_numeric($a[$i]))
		{
			if (ctype_alpha($b[$i]))
				return 1;
			if (is_numeric($b[$i]) && $a[$i] != $b[$i])
				return ($a[$i] > $b[$i]);
			else if (!is_numeric($b[$i]))
				return 0;
		}
		else
		{
			if (ctype_alpha($b[$i]) || is_numeric($b[$i]))
				return 1;
			if ($a[$i] > $b[$i])
				return 1;
		}
	}
	if ($a[$i] && !$b[$i])
		return 1;
	return 0;
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

	usort($a, 'ft_ssap2');

	foreach ($a as $value)
	{
		echo ("$value\n");
	}
}
?>
