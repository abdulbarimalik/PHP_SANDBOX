<?php 
	$loggedIn = true;
	$arr = [1,2,3,4,5];

	if($loggedIn){
		echo 'You are logged in';
	}else{
		echo 'You are NOT logged in';
	}
	$br = "<br>";
    echo $br;
	// Short hand syntax or terbary operator
	echo ($loggedIn) ? 'You are Logged In' : 'You are NOT Logged IN';

	$isRegistered  = ($loggedIn == true) ? true : false;
	echo $br, $isRegistered;
	echo $br;
	$score = 12 ;
	$age = 7;
	echo 'Your score is: '. ($score > 10 ? ($age > 10 ? 'Average':' Exceptional'):($age > 10 ? 'Horrible':'Average'));
?>

 <!-- Alternate way of using Conditionals embeded with HTML -->
<div>
	<?php if($loggedIn){ ?>
		<h1>Welcome User</h1>
	<?php } else { ?>
		<h1>Welcome Guest</h1>
	<?php } ?>
</div>
<div>
	<?php if($loggedIn): ?>
		<h1>Welcome Visitor</h1>
	<?php else: ?>
		<h1>Welcome Resident Guest</h1>	
	<?php endif; ?>
</div>
<div>
	<?php foreach($arr as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>
</div>
<div>
	<?php for($i=0; $i<5 ;$i++): ?>
		<li><?php echo $i; ?></li>
	<?php endfor; ?>
</div>