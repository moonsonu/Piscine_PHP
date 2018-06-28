#!/usr/bin/env php
<?php
 date_default_timezone_set('Europe/Paris');
if ($argc == 2)
{
	$days = array(
		1 => "lundi",
		2 => "mardi",
		3 => "mercredi",
		4 => "jeudi",
		5 => "vendredi",
		6 => "samedi",
		7 => "dimanche");

	$month = array(
		1 => "janvier",
		2 => "fevrier",
		3 => "mars",
		4 => "avril",
		5 => "mai",
		6 => "juin",
		7 => "juillet",
		8 => "aout",
		9 => "septembre",
		10 => "octobre",
		11 => "novembre",
		12 => "decembre");

	$arr = array();
	$arr = explode(" ", $argv[1]);
	if (count($arr) != 5 || preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $arr[1], $arr[1]) === 0 ||
		preg_match("/^[0-9]{4}$/", $arr[3], $arr[3]) === 0||
		preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $arr[4], $arr[4]) === 0)
	{
		echo "Wrong Format\n";
		exit();
	}
	if (in_array(strtolower($arr[0]), $days) && in_array(strtolower($arr[2]), $month))
	{
		$arr[0] = array_search(strtolower($arr[0]), $days);
		$arr[2] = array_search(strtolower($arr[2]), $month);
		$time = mktime($arr[4][1], $arr[4][2], $arr[4][3], $arr[2], $arr[1][0], $arr[3][0]);
		if (date( "N", $time) == $arr[0])
			echo $time."\n";
		else
			echo "Wrong Format\n";
	}
	else
	{
		echo "Wrong Format\n";
		exit();
	}
}
?>
