<?php

	$myArray = array("pizza", "chocolate", "coffee");

	print_r($myArray);

	echo $myArray[2];

	echo "<br /><br />";

	$anotherArray[0] = "pizza";
	$anotherArray[1] = "yoghurt";

	print_r($anotherArray);

	echo "<br /><br />";

	$thirdArray = array(

		"France" => "French",
		"USA" => "English",
		"Germany" => "Deutsch"

	);

	print_r($thirdArray);

	$anotherArray[]="salad";

	echo "<br /><br />";

	print_r($anotherArray);

	echo "<br /><br />";

	unset($thirdArray["Germany"]);

	print_r($thirdArray);

	echo "<br /><br />";

	$name = "Mauricio";

	unset($name);

?>