<?php


require_once "val.php";

$ver = new RoboVerify;

if ($ver->validate($_POST['code'])) {
	echo "Welcome human!";
}else{
	echo "GO AWAY YOU ROBOT!";
}

?>
