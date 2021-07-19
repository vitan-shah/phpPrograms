<?php
	$n1=7;
	$n2=9;
	$n3=6;

	function add($a,$b,$c)
	{
		$d=$a+$b+$c;
		return $d;
	}

	$result= add($n1,$n2,$n3);
	echo 'Addition of three number is: '.$result;
?>