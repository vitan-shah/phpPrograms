<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device-width,initial-scale-1.0">
		<title>Multiple nummers in array</title>
	</head>
	<body>
		<form method="post">
			<label for="numers">Enter Multiple Numbers: </label>
			<input type="text" name="numbers" id="numbers" placeholder="e.g.12,13,15,17,19">
			<br>
			<button type="submit">Proceed... Please Wait</button>
		</form>
	</body>
	</html>

	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$num1 = $_POST['numbers'];
		$num=explode(',',$num1);

		$even=array();
		$odd=array();
		$i=0;
		$j=0;

		foreach ($num as  $value) {
			if($value%2===0)
			{
				$value=$value/2;
				$even[$i]=$value;
				$i++;
			}
			else
			{
				$value=$value*3;
				$odd[$j]=$value;
				$j++;
			}
		}

		echo "........The Array which is enter by you.....";
		echo "<br>";
		echo "[";
		foreach ($num as $value)
		{
			echo $value . ", ";
		}
		echo "]" . "<br><br><br>";

		echo ".........Even Array........";
		echo "<br>";
		echo "[";
		foreach($even as $value)
		{
			echo $value . ", ";
		}
		echo "]" . "<br><br><br>";

		echo ".........Odd Array........";
		echo "<br>";
		echo "[";
		foreach($odd as $value)
		{
			echo $value . ", ";
		}
		echo "]" . "<br><br><br>";

		}
	?>