<?php 
require_once 'csrf_class.php';

 $csrf = new csrf();

// Genera un identificador y lo valida
 $token_id = $csrf->get_token_id();
 $token_value = $csrf->get_token();

 print_r($token_id);
 echo "<br>";
 print_r($token_value);
 echo "<br>";


?>


<?php 
echo "Sesion <br>";
echo $_SESSION['token_id'];
 echo "<br>";
echo $_SESSION['token_value'];

?>