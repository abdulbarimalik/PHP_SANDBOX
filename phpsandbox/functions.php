<?php
  
  # FUNCTIONS - Block of code can be repeatedly called

   /* Functions can be declared in three ways

     - Camel Case - myFunction()
     - Lower Case: with underscore - my_function()
     - Pascal Case - MyFunction()

     In PHP we usually declare function with Camel Case and Lower Case, where as classes are declared with Pascal Case

      //CodeIgniter uses Lower Case for function declaration 
   */
    /* ---------------------- */
    /* USER DEFINED FUNCTIONS */
    /* ---------------------- */
     # Function Declaration
     function simpleFunction(){
     	echo "Hello World <br>";

     }
     # Function Call
     simpleFunction();
     // Function with variables
     function sayHello($name){
     	echo "Hello $name <br>";

     }
     sayHello("Nenoo");
     sayHello("Wills");

     function hello($name = 'Babu'){
     	echo "Hello $name <br>";
     }
     hello();
     hello("Tim"); // Tim over rites default value of parameter

     function addNumbers($num1, $num2){
     	echo $num1 + $num2 , "<br>";
     }
     addNumbers(2,3);

     function subNumbers($num1, $num2){
     	return $num1 - $num2;
     }
     echo subNumbers(5,3), "<br>";

     # PASSING ARGUMENTS BY REFERENCE
     // By Reference
     $myNum = 10;
     function addFive($num){
     	$num += 5;  // num = num + 5
     }
     function addTen(&$num){ // --> Pass By Reference
     	$num += 10 ;
     }
     addFive($myNum);
     echo "Value: $myNum <br>";

     addTen($myNum);
     echo "Value: $myNum <br>";

?> 