<?php
	// Assign name value to $name variable
	$name = "Christopher M. Kinne";
	
	/* Determine the number of words and length of my name, 
	and replace my middle initial with the full middle name */
	$name_word_count = str_word_count($name);
	$name_length = strlen($name);
	$name_replace = str_ireplace('M.', 'Matthew', $name);
	
	// echo the variables in a string
	echo "The number of words in my name is: $name_word_count <br>";
	echo "The length of my name is: $name_length <br>";
	echo "I replaced my middle initial with my full middle name: $name_replace .";

?>