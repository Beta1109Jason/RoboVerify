# Sample HTML Page:
	<form action="test-validate.php" method="post">
		<img src="img.php" alt="RoboVerify" />
		<input type="text" name="code">
		<input type="submit" value="I am not a robot">
	</form>


# Sample PHP script:
<?php

require_once "val.php";

$ver = new RoboVerify;

if ($ver->validate($_POST['code'])) {
	#Passed RoboVerify
}else{
	#Failed or gave Error
}

?>

# Basics
HTML:
You need to add the image img.php, do users can see the code: <img src="img.php" alt="RoboVerify" />

PHP:
You need to require the file val.php in your PHP script: require_once "val.php";
You need to set a var as the RoboVerify Class: $ver = new RoboVerify;
To test validation use the function validate(Code to be checked): $ver->validate($_POST['code'])
It will return true if passed or false if failed or there was an error.
