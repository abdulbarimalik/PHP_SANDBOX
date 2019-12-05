<h1>
<?php
	# echo 'Hello World';
    # print 'Hello';
    // "echo" did return value, where as "print" return, but 'echo' is faster
    # Single Line Comment
    /* Multiline Comment */
    
    # Variables 
    /*
      - Prefix with $ (Dollar sign)
      - Start with a letter or an underscore '_'
      - Start with Only letters and underscores but can ends with numbers e.g num1
      - Case Sensitive
     */
      $output = "Assalam u Alaikum! <br>";
      echo $output;

     # DATA TYPES
      /*
		- String
		- Integers
		- Float
		- Booleans
		- Arrays
		- Objects
		- NULL
		- Resource
      */
	$name = 'Abdul Baqi Malik ';
	$num1 = 2;
	$float1 = 6.4;
	$bool1 = False;
	$br = "<br>";
	echo $name, $num1, $float1, $bool1 , $br;	

	# Arthemetic : Concatenation
	$num2 = 14;
	$sum = $num1 + $num2;
	echo $sum;

	# '.' Dot is used for string concatenation using single quotes in PHP
    # where as double quotes simply does the job: double quotes actually parse the variables in PHP
	$string1 = 'Hello';
	$string2 = 'World';
	$greeting = $string1 .' '. $string2 . '!';
	echo $br, $greeting;
	$greeting2 = "$string1 $string2";
	echo $br, $greeting2;

	# Escape Sequence: use '\' Back Slash
	$string3 = 'They \'re Here';
	echo $br, $string3;

	# Constants
	// By Defaule constants are CASE SENSITIVE, if you want to use lowercase you have to add third parameter 'true'
	define('SALAM', 'Assalam u\'Alaikum!');
	echo $br, SALAM;
	define('HELLO', 'Hello World', true);
	echo $br, hello; 
?></h1 >
