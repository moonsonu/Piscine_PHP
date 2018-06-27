<?php
function ft_is_sort($arr)
{
	$a = $arr;
    sort($a);
    if ($a == $arr){
        return true;
    } else {
        return false;
    }
}
?>
