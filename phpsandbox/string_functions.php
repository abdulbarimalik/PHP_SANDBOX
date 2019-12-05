<?php
 # String Functions
 $br = "<br>";
  # Substring - substr() -> returns a portion of string
  $output = substr('Hello', 0, 5);
  $output = substr('Hello', -2);
  echo 'Substring: ',$output, $br;

  # string length - strlen()
  $output = strlen('Welcome');
  echo 'string length: ', $output, $br;

   # strpos() - Finds the first occurence position in the string 
  $output = strpos('Hello World', 'r');
  echo 'Substring first occurence in the string: ', $output, $br;

    # strrpos() - Finds the last occurence of the substr in the string
  $output = strrpos('Hello World', 'o');
  echo 'Substring last occurence in the string: ',$output, $br;

  // trim(str);  --> Strips whitespace
  $text = 'Hello World    ';
  var_dump($text);
  $trimmed = trim($text);
  var_dump($trimmed);
  echo $br;

  # strtoupper() - makes every thing uppercase
  $string = strtoupper('Pakistan Zindabad');
  echo $string, ' -- ';

  # strtolower() - makes every thing lowercase
  $string = strtolower('India Murdabad');
  echo $string, $br;

  # ucwords() - Capitalize first letter of the world
  $string = ucwords('kashmir zindabad');
  echo $string, $br;

  # str_replace() - replace words or occurences in the string
  $text = 'Hello World';
  $string = str_replace('World','Everyone', $text);
  echo $string, $br;

  # isstring() --> to check if something is string or not
  $text = 'Hello';
  $text2 = 222;
  $string = is_string($text);
  $string2 = is_string($text2);
  echo $string, $string2, $br;  // string 2 is not string so it returns false , shows nothing

  $values = array(true, false, null, 22, 34, 'on', 'off', '2.314', 3.2,'',' ',0,'0');

  foreach ($values as $value) {
  	if(is_string($value)){
  		echo "{$value} is a string<br>";
  	}
   } 

 # gzcompress() - Allows us to compress the string
  $string =
  	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.";


  $compressed = gzcompress($string);
  echo 'Compressed Text using gzcompress(): ',$br,$compressed, $br;

  # Uncompress the text
  $original = gzuncompress($compressed);
  echo 'Original uncompressed text using gzuncompress():',$br,$original;




?>