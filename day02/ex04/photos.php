#!/usr/bin/env php
<?php
if (function_exists('curl_init'))
{
	$ch = curl_init($argv[1]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$source = curl_exec($ch);
	curl_close($ch);
}
$dir = strstr($argv[1], 'w');
mkdir ($dir);
if (preg_match_all('/<img.*?src ?= ?["\'"](?P<img_url>.*?)["\']/si', $source, $img))
{
	print_r($img);
	foreach ($img['img_url'] as $i)
	{
		$link = preg_replace('/^\//', $argv[1].'/', $i);
		$name = substr(strrchr($link, "/"), 1);
		$curl = curl_init($link);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_BINARYTRANSFER, 1);
		$imgs = curl_exec($curl);
		curl_close($curl);
		$fd = fopen($dir.'/'.$name, 'w');
		fwrite($fd, $imgs);
		fclose($fd);
	}
}
?>
