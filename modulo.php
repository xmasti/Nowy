<?php
/**
 * MODULO - RESZTA Z DZIELENIA 
 */

for($i=1;$i<=150;$i++)
{
	if($i % 3 == 0)
	{
		echo $i.' -> 3<br>';
	}
	elseif($i % 5 == 0)
	{
		echo $i.' -> 5 <br>';
	}
	elseif($i % 15 == 0)
	{
		echo $i.' -> 15<br>';
	}
	
}

