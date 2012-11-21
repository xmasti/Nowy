<?php
/*
 * Losowanie liczb
 */
echo rand(5, 10);

echo "<hr>";

/**
 * losowanie z tablic
 */

$tab = array('a', 'b', 'c', 'd');

$w = '';

for($i=0;$i<=3;$i++)
{
	$w .= $tab[array_rand($tab)];
}
	echo $w;


echo "<hr>";


for($i=0;$i<=160;$i++)
{
	echo $i.' - '.chr($i).'<br>';	
}