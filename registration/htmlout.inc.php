<?php 

function html($string)
{
	return htmlspecialchars($string,ENT_QUOTES);
}

function sql($string,$link)
{
	return mysqli_real_escape_string($link,$string);
}
?>