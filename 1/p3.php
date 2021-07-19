<?php
	$n1=7;
	$n2=9;
	$n3=6;

	$largeno = $n1 == $n2 && $n1==$n3 ? "All numbers are same" : ($n1 > $n2 && $n1 > $n3 ? 
		($n2 > $n1 && $n2 > $n3 ? $n2 : $n3));

	echo 'The largest number is'.$largeno;
?>