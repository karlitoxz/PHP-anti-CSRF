<?php 
session_start();
require_once 'csrf_class.php';


 if (isset($_SESSION['token_id']) && CSRF::check_valid($_POST[''.$_SESSION['token_id'].''])){
//Codigo a ejecutar despues de validar el token--------------------

 	echo '{ "alert": "success", "message": "><strong>Token invalido.</strong><br />"}';
//Codigo a ejecutar despues de validar el token--------------------		
 }else{
 		echo '{ "alert": "error", "message": "El mensaje no pudo ser enviado debido a un error inesperado.<strong>Motivo:</strong>Token invalido."}';
 }


 ?>