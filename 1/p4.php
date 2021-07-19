<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device-width,initial-scale-1.0">
		<title>Find Season</title>
	</head>
	<body>
		<form method="post">
			<label for="season">Enter number of month: </label>
			<input type="text" name="season" id="season">
			<br>
			<button type="submit">SUBMIT</button>
		</form>
	</body>
	</html>

	<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$number = $_POST['season'];

		switch ($number) {
			case '3':
			case '4':
			case '5':
					echo "This is Spring season";
					break;
			case '6':
			case '7':
			case '8':
					echo "This is Summer season";
					break;
			case '9':
			case '10':
			case '11':
					echo "This is Autumn season";
					break;
			case '12':
			case '1':
			case '2':
					echo "This is Winter season";
					break;
			
			default:
					echo "Please Enter number between 1 to 12";
					break;
				
		}
}
?>