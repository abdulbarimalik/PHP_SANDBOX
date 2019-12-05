<?php 
	$br = "<br>";
	$user = ['name' => 'Babu', 'email' => 'babu@gmail.com', 'age'=> 23];
	
	$user  = serialize($user);

	setcookie('user', $user, time() + (86400*30));

	$user  = unserialize($_COOKIE['user']);

	echo 'User Name: ',$user['name'], $br,'Email: ', $user['email'], $br,' Age:' ,$user['age'], $br;
	print_r($user);
?>