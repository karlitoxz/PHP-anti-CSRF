<?php
	include 'csrf_token.php';
	
	//echo $_POST['_token'];
	//echo "<br>";
	//echo $_SESSION['token'];

	if (isset($_POST['_token']) && CSRF::val_token($_POST['_token'])) {
		echo '{ "alert": "success", "message": "><strong>Token valido.</strong>"}';
	}else{
		echo '{ "alert": "error", "message": "El mensaje no pudo ser enviado debido a un error inesperado.<strong>Motivo:</strong>Token invalido."}';
	}
 ?>