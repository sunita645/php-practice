<?php

// Creates my error function which prints message
//to user
function myerror($error_no, $error_msg) {
	echo "Error: [$error_no] $error_msg ";
	echo "\n Now Script will end";
	
	// When error occurred script has to be stopped
	die();
}

// Setting set_error_handler
set_error_handler("myerror");

$a = 10;
$b = 0;

// This will generate error
echo($a / $b);;
?>
