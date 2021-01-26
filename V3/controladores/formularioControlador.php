<?php
session_start();
require_once "csrfControlador.php";

Class controladorLogin{

	//Traer datos usuario --------------------------------
	public function ctrLoginUsuario($userlogin, $userpass, $_token){

		if (!CSRF::val_token($_token)) {
			$respuesta = array("login"=>"token");
			return $respuesta;
		}

		$segurihackMD5 = '4cf6f5528df15b0fbd8e8cd826da67aa';
		$userpassMD5 = hash('md5', $userpass);

		if ($userlogin == 'segurihack' && $segurihackMD5 == $userpassMD5) {
			
			$respuesta = array("login"=>"success");

		} else {
			
			$respuesta = array("login"=>"failure");

		}
		return $respuesta;
	}
	//Traer datos usuario --------------------------------

}

//AutoLoad Ajax-----------------------------------------------------
if(isset($_POST['username']) && $_POST['pwd'] != ''){
	$userlogin = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$userpass = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);
	$_token = filter_input(INPUT_POST, '_token', FILTER_SANITIZE_STRING);
	$resp =  controladorLogin::ctrLoginUsuario($userlogin, $userpass, $_token);
	echo json_encode($resp);
}

?>