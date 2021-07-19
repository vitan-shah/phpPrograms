<?php

	$name = array('Mahesh','Suresh','Haresh');
	$detail = array('Mahesh'=>42300,'Suresh'=>51000,'Haresh'=>37500);

	echo "Employee's name<br>";
	foreach($name as $value)
	{
		echo $value.'<br>';
	}

	echo "<br><br><br>Employee's details: <br>";
	foreach($detail as $key=>$value)
	{
		echo $key." salary is ".$value.'<br>';
	}
?>