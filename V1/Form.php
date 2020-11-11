<?php
	include 'csrf_token.php';
	$insToken = new CSRF;
	$token = $insToken -> gen_token();
	echo $token;
	echo "<br>";
	echo $_SESSION['token'];
	//Formulario de ejemplo de validacion CSRF
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) Form</h2>
  <form action="validarForm.php" method="POST">
    <div class="form-group">
      <label for="nombre">nombre:</label>
      <input type="nombre" class="form-control" name="nombre" placeholder="Enter nombre">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
      <input type="hidden" name="_token" value="<?php echo $token ?>">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body> 
</html>
