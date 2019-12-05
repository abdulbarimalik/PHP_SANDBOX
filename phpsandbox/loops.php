<?php
 # Loops : Execute code set numberof times
/*
	- FOR
	- WHILE
	- DO..WHILE
	- FOR EACH (foreach)
*/

 # For Loop: Used when we know exact number of iterations
	// @params: init, condition, inc

	echo "For Loop: <br>";
	for($i=0; $i<5; $i++){
		echo 'Number '.$i, '<br>';
	}

 # While Loop: Used when we only know the condition not exact number of iterations
  // @params: condition	
    $i=0;
    echo "While Loop <br>";
	while($i<5){
		echo $i, '<br>';
		$i++;
	}

# DO..WHILE LOOP: do..while loop has to run at least one's, Actions happens in do, while condition go in while
	// @params: condition
	$j=5;
	echo "Do..While Loop <br>";
	do{
		echo $j, '<br>';
		$j++;

	}while($j<10);

# Foreach Loop: To Iterate Through Structures like arrays
	echo "ForEach Loop: <br>";
	$people = array('Malik', 'Raja', 'Minhas');
	foreach($people as $person){
		echo $person, '<br>';
	}
	echo "ForEach Loop for Associative Array: <br>";
	$person = array('Malik'=>'malik@gmail.com','Raja'=>'raja@gmail.com','Minhas'=>'minhas@gmail.com');
	foreach ($person as $people => $email) {
		echo $people.': '.$email, '<br>';
	}
?>	

