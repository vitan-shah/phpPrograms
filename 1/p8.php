<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device-width,initial-scale-1.0">
		<title>Assosiative array</title>
		<style>
			table,
			tr,
			td{
				border:  1px solid black;
			}
		</style>

	</head>
	<body>
		<?php
			$array1 = array("Gujarat" => array("Surat","Valsad","Navsari","Tapi"),"Rajasthan"=> array("Udaipur","Jaipur","Bikaner"),"Madhya Pradesh"=>array("Indore","Bhopal","Ratlam","Gwalior"));
		?>

		<table>
			<?php
				foreach ($array1 as $state => $cities) 
				{
					?>
					<tr>
					<td><?php echo "<b>" . $state . "</b>"; ?></td>
					<?php
					foreach($cities as $city)
					{
						?>
						<td><?php echo $city; ?></td>
						<?php
					}
					?>
					<tr>
					<?php
				}
				?>
				</table>		
	</body>
	</html>
