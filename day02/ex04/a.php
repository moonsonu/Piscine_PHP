#!/usr/bin/php
<?php
if ($argc != 2)
	return (0);
$curl = curl_init($argv[1]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$html = curl_exec($curl);
curl_close($curl);

preg_match_all('/<img.*?src ?= ?["\'"](?P<img_url>.*?)["\']/si', $html, $imgs);
if (empty($imgs))
	return (0);
$dir = strstr($argv[1], 'w');
mkdir($dir);
foreach ($imgs['img_url'] as $v)
{
	$link = preg_replace('/^\/\//', "http://", $v);
	print_r ($link."\n");
	$name = substr(strrchr($link, "/"), 1);
	$curl = curl_init($link);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$img = curl_exec($curl);
	$f = fopen($dir.'/'.$name, 'w');
	fwrite($f, $img);
}
?>
