<?php
function debug($var)
{
	echo '<pre style="border:1 px solid red; margin 5px; padding: 5px;">';
	print_r($var);
	echo '</pre>';
}

$config = parse_ini_file('config.ini');

debug($config);