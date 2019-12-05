<?php 
 // People Array @TODO - Get from DB
 $people[] = "Babu";
 $people[] = "Chandu";
 $people[] = "Dabu";
 $people[] = "Doctor";
 $people[] = "Transformer";
 $people[] = "Sheby";
 $people[] = "Nooni";
 $people[] = "Fari";
 $people[] = "Aaty";
 $people[] = "Belo";
 $people[] = "Nasheman";
 $people[] = "Papu";
 $people[] = "Munna";
 $people[] = "Handle";

 // Get query string
 $q = $_REQUEST['q'];

 $suggestion = "";

 // Get Suggestions
 if($q !== ""){
 	$q = strtolower($q);
 	$len = strlen($q);

 	foreach ($people as $person) {
 		if(stristr($q, substr($person, 0, $len))){
 			if($suggestion === ""){
 				$suggestion = $person;
 			} else {
 				$suggestion .= ", $person"; // Append the person
 			}
 		}
 	}
 }
 echo $suggestion === "" ? "No Suggestion" : $suggestion;