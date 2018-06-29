#!/usr/bin/env php
<?php
function replace($match)
{
	$match[0] = preg_replace("/$match[1]/", strtoupper($match[1]), $match[0]);
	return ($match[0]);
}
if ($argc > 0)
{
	$line = file_get_contents($argv[1]);
	$match = preg_replace_callback("/<a href=.+>(.+)<\/a>/", "replace", $line);
	$match = preg_replace_callback("/<a href=.+>(\s.*.+)<.*><\/a>/mi", "replace", $match);
	$match = preg_replace_callback("/<span>(.+)<.*>.*<\/span>/", "replace", $match);
	$match = preg_replace_callback("/<div.*>(.+)<.*>.*<\/div>/", "replace", $match);
	$match = preg_replace_callback("/title=\"(.+)\">/mi", "replace", $match);
	echo $match;
}
?>
