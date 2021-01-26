<?php 
session_start();
//Formulario de validacion CSRF
require_once './controladores/csrfControlador.php';
$_token = CSRF::gen_token();
//Formulario de validacion CSRF
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="./vistas/js/formulario.js"></script>
</head>
<body>

<div class="container">
  <h2>Formulario para probar CSRF</h2>
  <form class="p-2 bg-light" name="formulario" id="formulario" method="post" autocomplete="off" action="javascript: login();">
    <div class="form-group">
      <label for="username">nombre:</label>
      <span id="errorUserlogin" class="error invalid-feedback"></span>
      <input type="username" class="form-control" id="username" name="username" placeholder="Enter nombre">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <span id="errorUserpass" class="error invalid-feedback"></span>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
      <input type="hidden" name="_token" value="<?php echo $_token ?>">
    </div>
    <button type="button" class="btn btn-primary btn-block" id="btnIngresar" onclick="login();">Ingresar</button>
  </form>
</div>
<div id="resultado"></div>

</body> 
</html>
