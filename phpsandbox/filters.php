<?php
 $br  = "<br>";
 # FILTERS
 // Check for Posted Data
 /* if(filter_has_var(INPUT_POST, 'data')){  // first one is input field type with method used, second one is field name
 	// We can sanitize data
 	echo 'Data Found';
 } else {
 	echo 'No Data Found';
 }*/
 if(filter_has_var(INPUT_POST, 'data')){  // first one is input field type with method used, second one is field name
 	$email = $_POST['data'];
 	
 	// Remove illegal chars from email
 	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
 	echo $email.'<br>';

 	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
 		echo 'Email is Valid';
 	} else {
 		echo 'Email is NOT Valid';
 	}
 	/*if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
 		echo 'Email is Valid';
 	} else {
 		echo 'Email is NOT Valid';
 	}*/
 }
  # FILTER_VALIDATION
 /* 
   FILTER_VALIDATE_EMAIL
   FILTER_VALIDATE_BOOLEAN
   FILTER_VALIDATE_FLOAT
   FILTER_VALIDATE_INT
   FILTER_VALIDATE_IP
   FILTER_VALIDATE_REGEXP
   FILTER_VALIDATE_URL

 */
   # FILTER SANITIZATION
   /*
   	FILTER_SANITIZE_EMAIL
   	FILTER_SANITIZE_ENCODED
   	FILTER_SANITIZE_NUMBER_FLOAT
   	FILTER_SANITIZE_NUMBER_INT
   	FILTER_SANITIZE_SPECIAL_CHARS
   	FILTER_SANITIZE_STRING
   	FILTER_SANITIZE_URL
   */ 
   	# Validate cariable
   	echo $br;
   	$var = 23;
   	if(filter_var($var , FILTER_VALIDATE_INT)){
   		echo $var.' is a number';
   	} else {
   		echo $var.' is NOT a number';
   	}
   	echo $br;
   	$var = '<script>alert(1)</script>';
   	//echo $var;
   //	echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
   	//var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

   	$filters = array(
   		"data" => FILTER_VALIDATE_EMAIL,
   		"data2"=> array(
   			"filter" => FILTER_VALIDATE_INT,
   			"options" => array(
   				"min_rage"=> 1,
   				"max_range"=>100
   			)
   		)
   	);

   	//print_r(filter_input_array(INPUT_POST, $filters));

   	$arr = array(
   		"name" => "spooky mindz",
   		"age" => "28",
   		"email" => "spooky@gmail.com"
   		);
   	$filters = array(
   		"name" => array(
   			"filter" => FILTER_CALLBACK,
   			"options" => "ucwords"
   		),
   		"age" => array(
   			"filter" =>	FILTER_VALIDATE_INT,
   			"options" => array(
   				"min_range" => 1,
   		 		"max_range" => 120
   		    ) 
   	    ),
   	    "email" => FILTER_VALIDATE_EMAIL
   	);    
   	print_r(filter_var_array($arr, $filters));
?>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="data"> 
	<input type="text" name="data2"> 
	<button type="submit">Submit</button>
</form>