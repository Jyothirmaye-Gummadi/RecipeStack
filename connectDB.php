<?php

define ('DB_USER', "root");
define ('DB_PASSWORD', "");
define ('DB_HOST', 'localhost');
define ('DB_NAME', 'RecipeStack');

// define ('DB_USER', 'kumar');
// define ('DB_PASSWORD', 'kumar');
// define ('DB_HOST', 'handson-mysql');
// define ('DB_NAME', 'RecipeStack');

function nvl($val, $replace)
{
	if(is_null($val) || $val == '')
		return $replace;
    else
		return $val;
}

function escapeStr($conn,$str)
{
	return mysqli_real_escape_string($conn,nvl($str, null));
}
?>