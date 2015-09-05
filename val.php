<?php

class RoboVerify {

	function validate(){
		session_start();

		if (isset($_POST['code'])) {
			if ($_POST['code'] == $_SESSION['num']) {
				return true;
				die();
			}else{
				return false;
				die();
			}
		}else{
			return false;
			die();
		}

		
	}
}
?>
