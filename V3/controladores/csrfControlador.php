<?php

	class CSRF{
		
		/*Funcion para generar un token CSRF*/
		
		static public function gen_token(){
			
			if(isset($_SESSION["token"])){
				unset ($_SESSION["token"]);
			}
				$csrf_token = hash('md5', uniqid());
					$_SESSION["token"] = $csrf_token;
				//echo $csrf_token.'<br>';

			return $csrf_token;
		}
		
		/*Funcion para validar el token por medio de sessiones*/
		
		static public function val_token($_token){	
			//echo "<br>compare: ".$_token." == ".$_SESSION["token"];
			if (isset($_SESSION['token']) && $_token == $_SESSION["token"]) {
					unset ($_SESSION["token"]);
				return true;
			}else{
				return false;
			}
			
		}
		
	}

?>