<?php

class csrf {

	public function get_token_id() {
		if(isset($_SESSION['token_id'])) { 
			unset ($_SESSION["token_id"]);
		}
			$token_id = uniqid();
			$_SESSION['token_id'] = $token_id;
			return $token_id;
		
	}



	public function get_token() {
		if(isset($_SESSION['token_value'])) {
			unset ($_SESSION["token_value"]);
		}
			$token = hash('sha256', uniqid());
			$_SESSION['token_value'] = $token;
			return $token;

	}


	public function check_valid($t_val) {
		
			if($t_val == $_SESSION['token_value']) {
				unset ($_SESSION['token_id']);
				unset ($_SESSION["token_value"]);
				return true;
			}else{
				return false;
			}
		
	}


}