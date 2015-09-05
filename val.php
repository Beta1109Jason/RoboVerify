<?php

class RoboVerify {

	function validate($code){
		session_start();

		if (isset($code)) {
			if ($code == $_SESSION['num']) {
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
