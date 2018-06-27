<?php
function ft_split($s)
{
	$split = array_filter(explode(" ", $s));
	sort($split);
	return ($split);
}
?>
