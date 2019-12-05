<?php
 # ARRAYS: Variable that holds multiple values
/*
	- Indexed
	- Associative
	- Multi-Dimentional
*/
	$br = "<br>";
 # Indexed
	$people = array('Khan', 'Gujar','Rao');
    $ids = array(901,902,903);
    $cars = ['Honda', 'Toyota','Suzuki'];
     # Add some thing into array
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';  // Empty brackers adds enrty into the last one 

	echo $people[0], "<br>";
	echo $ids[1], "<br>";
	echo $cars[2];
	echo $cars[4];

	echo count($cars) , "<br>";
	print_r($cars);
	echo"<br>"; // what's exactly in the array
	var_dump($cars); // Look at the data type of array as well, You can dump any variable in var-dump and look at it's data type

 # Associative Arrays: Allows you to define keys and the values, keys are numbers and we can assign keys to what ever we want
	$people = array('John' => 32,'Ashley' => 24, 'Nurse' => 36 );
	$ids = [22 => 'John', 25 => 'Ashley', 30 => 'Nurse'];
	$people['Jill'] = 42; // Add entry into the array

	echo "<br>",$people['John'];
	echo $br, $ids[22];
	echo $br, $people['Jill'];
	echo $br;
	print_r($people);
	echo $br;
	echo var_dump($people);

 # Multi-Dimentional Arrays: Array with-in and Array
 	$cars = array(
 		array('Honda', 20, 10),  // CarName, # in stocks, # Solds
 		array('Ford', 30, 20),
 		array('Toyota', 23, 12)
 	);
 	echo $br, $cars[0][2], $br, $cars[1][0], $br, $cars[2][1] ;	

?>