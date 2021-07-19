<?php
	$items = array("Ariel"=>500,"Tirupati Oil"=>1200,
	"Fastrack"=>2000,"L'oreal"=>300,"Westside"=>799);

	foreach($items as $key => $value)
	{
		echo "The Price is: ".$key." in SuperMarket is ".$value."<br><br>";
	}
?>