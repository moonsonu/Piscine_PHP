#!/usr/bin/env php
<?php
if ($argc == 2)
{
	$content = file_get_contents($argv[1]);
	$content = explode("\n", $content);

	foreach ($content as $i => $s)
	{
		if (preg_match ("/^[0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9] --> [0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9]$/", $s))
		{
			$time[$i] = $s;
		}
	}
	sort($time);
	$index = 0;
	$j = 0;
	foreach($content as $i => $s)
	{
		if (preg_match ("/^[0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9] --> [0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9]$/", $s))
		{
			echo $time[$index]."\n";
			$index++;

		}
		else
		{
			if ($j < count($content) - 1)
				echo $s."\n";
		}
		$j++;
	}
}
?>
