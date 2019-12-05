<?php

	// set cookie for a day
	setcookie('username', 'Babu', time() + (86400*30));

	// delete the cookies
	setcookie('username', 'Babu', time() - 3600);

	if(count($_COOKIE) > 0){
		echo 'There are '. count($_COOKIE).' saved';
	} else {
		echo 'There are No cookies saved<br>';
	}

 	if(isset($_COOKIE['username'])){
 		echo 'User '.$_COOKIE['username'].' is set';
 	}
 	else {
 		echo 'User is NOT set';	
 	}
?>