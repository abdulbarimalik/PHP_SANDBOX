<?php 
 # Conditionals: Selective Control Structures of Programming
 /*
 	Comparisons Operators:
 		'==' is equals to '===' -> Identical Operator
 		'<' and '>'
 		'<=' and '>='
 		'!=' -> Not Equals to
 		'!==' -> Not Identical		
 */
 		/*
 			Selection Control Structures
 			- if
 			- if/else
 			- if/ elseif / else
 			- Nested if
 		*/
 		$br = "<br>";	
 		$num = '5';
 		if ($num == 5){ // == Check the value not type
 			echo '<br>5 is a Number';
 		}
 		if($num === '5'){  // === Check the type
 			echo "<br> 5 is String";
 		}else{
 			echo "<br>5 is Integrer";
 		}
 		$n = 6;
 		echo "<br>";
 		if ($n == 5)
 		{
 			echo '5 Passed';
 		}
 		elseif ($n == 6) {
 			echo '6 Passed';
 		}
 		else 
 		{
 			echo 'Didn\'t Pass Any';
 		}

 		# NESTED IF
 		$m = 9;
 		if ($m>5){
 			if($m<10){
 				echo $br,"$m Passed";
 			}
 		}
 		/*
 			LOGICAL OPERATORS 

 			- AND &&
 			- OR ||
 			- XOR Exclusive OR
 		*/
 			# AND &&
 		if($m > 0 && $m < 5){
 			echo $br, "$m PASSED";
 		} else {
 			echo $br, "$m FAILED";
 		}
 		# OR ||
 		if($m > 0 || $m < 10){
 			echo $br, "$m PASSED";
 		} else {
 			echo $br, "$m FAILED";
 		}
 		# XOR: Means one has to be true but not both
 		if($m > 0 XOR $m < 10){
 			echo $br, "$m PASSED";
 		} else {
 			echo $br,"$m FAILED",$br;
 		}

 		# SWITCH

 		$favColor = 'black';
 		switch($favColor)
 		{
 			case 'red': echo 'Your Favorite Color is Red';
 			break;
 			case 'blue': echo 'Your Favorite Color is Blue';
 			break;
 			case 'green': echo 'Your Favorite Color is Green';
 			break;
 			default: echo 'Your Favorite Color is some thing else';
 		}



?>