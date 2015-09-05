# RoboVerify
Sample HTML Page:
	<form action="test-validate.php" method="post">
		<img src="img.php" alt="RoboVerify" />
		<input type="text" name="code">
		<input type="submit" value="I am not a robot">
	</form>


Sample PHP script:
<?php

require_once "val.php";

$ver = new RoboVerify;

if ($ver->validate()) {
	#Passed RoboVerify
}else{
	#Failed or gave Error
}

?>
