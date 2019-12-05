<?php 
// 3 ways to get data in php
    /*
        - GET   - POST  -REQUEST

    */
	if(isset($_GET['name'])){   // Check to see if that value is set
		//echo $_GET['email'], "<br>";
        //print_r($_GET);
        $name = htmlentities($_GET['name']); // For holding html tags
        //echo $name;

	}

/*    if(isset($_POST['name'])){   // Check to see if that value is set
        //echo $_GET['email'], "<br>";
        //print_r($_GET);
        $html = htmlentities($_POST['name']); // For holding html tags
        echo $html;

    } 
    if(isset($_REQUEST['name'])){   // this isn't use much
        //echo $_GET['email'], "<br>";
        //print_r($_GET);
        $html = htmlentities($_REQUEST['name']); // For holding html tags
        echo $html;

    } */
    //echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>MY WEBSITE</title>
</head>
<body>
	<form method = "GET" action="get_post.php">
		<div>
            <label>Name:</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email:</label><br>
            <input type="text" name="email">
        </div>
       	<input type="submit" value="Submit">
	</form>
    <ul>
        <li>
            <a href="get_post.php?name=babu">babu</a>
        </li>
        <li>
            <a href="get_post.php?name=chandu">chandu</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>