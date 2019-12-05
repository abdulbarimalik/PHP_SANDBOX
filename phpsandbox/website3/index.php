<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check for Submit

	if(filter_has_var(INPUT_POST, 'submit')){
		//echo 'Submitted';
		# GET FORM DATA
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message) ){
			// Passed
			//echo "PASSED";
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please Enter a Valid Email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				// Recipient Email
				$toEmail ='ABMmadni5@gmail.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
						<h4>Name</h4><p>'.$name.'<p>
						<h4>Email</h4><p>'.$email.'<p>
						<h4>Message</h4><p>'.$message.'<p>'
				;

				# Email Headers
				$headers = "MIME-Version: 1.0"."\r\n";
				$headers.= "Content-Type:text/html;charset=UTF-8"."\r\n";


				# Additional Headers
				$headers .= "From: ".$name."<".$email.">"."\r\n";

				if(mail($toemail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your Email has been sent';
					$msgClass = 'alert-success';
				} else {
					$msg = 'Your email has not been sent';
					$msgClass = 'alert-danger';
				}

				//echo 'Passed';
			}
		} else {
			// Failed
			$msg = 'Please Fill in Required Fields';
			$msgClass = 'alert-danger';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact US</title>
	<link rel="stylesheet"  href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
	<nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
		<div class = "container">
			<div class = "navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>
		</div>
	</nav>
	<br>
	<div class="container">
		<?php if($msg != ''): ?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		<?php endif; ?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-secondary">Submit</button>
		</form>
	</div>

</body>
</html>