<?php
	class Person
	{
		public $name;

		private $email;
		private $fname;
		private static $ageLimit = 40;

		public function __construct($fname, $email){   // PHP Constructor 
			$this->fname = $fname;
			$this->email = $email;
			echo __CLASS__.' Created<br>';   // __CLASS__ --> gives us the name of the class
		}

		public function __destruct(){
			echo __CLASS__.' Destroyed<br>';
		}

		public function setName($fname){
			$this->fname = $fname;
		}
		public function getName(){
			return $this->fname.'<br>';
		}

		public function setEmail($email){
			$this->email = $email;
		}
		public function getEmail(){
			return $this->email.'<br>';
		}
		public static function getAgeLimit(){
			return self::$ageLimit;
		}

	}
	# Static Props and methods
	//echo Person::$ageLimit; // for accessing public static variable
	echo Person::getAgeLimit();
	
	class Customer extends Person {
		private $balance;

		public function __construct($name, $email, $balance){
			parent:: __construct($name, $email, $balance);
			$this->balance=$balance;
			echo 'A New '.__CLASS__.' has been created<br>';
		}

		public function setBalance($balance){
			$this->balance = $balance;
		}
		public function getBalance(){
			return $this->balance.'<br>';
		}

	}
//	$customer1 = new Customer('Babu','babu@babumail.com', 500);
//	echo $customer1 -> getBalance();

/*	$person1 = new Person;

	// for accessing public variables
	$person1->name = 'Babu';
	echo $person1->name;

	// for accessing private variables
	$person1 -> setName('Chandu');
	echo $person1 -> getName();
*/
	// Class Oject with constructor initialization
//	$person2 = new Person('Babu Danger', 'babu@spookymindz.com');

//	echo $person2 -> getName(),' ', $person2->getEmail();
?>