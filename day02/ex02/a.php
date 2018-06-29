#!/usr/bin/php
<?php
if ($argc < 2 || !file_exists($argv[1]))
	return (0);
$read = fopen($argv[1], 'r');
$write = "";
while ($read && !feof($read))
{
	$write .= fgets($read);
}
$write = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si", function($match)
{
	$match[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", function($match)
   	{
		return ($match[1].strtoupper($match[2]).$match[3]);
	}, $match[0]);
	$match[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($match)
   	{
		return ($match[1].strtoupper($match[2]).$match[3]);
	}, $match[0]);
	return ($match[0]);
}, $write);
print $write;
?>
