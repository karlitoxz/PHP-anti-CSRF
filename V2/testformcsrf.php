<?php 
session_start();
//Formulario de validacion CSRF
require_once 'csrf_class.php';
 $csrf = new csrf();
 $token_id = $csrf->get_token_id();
 $token_value = $csrf->get_token();
 echo $token_id;
 echo "<br>";
 echo $token_value;
//Formulario de validacion CSRF
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
  <form action="testvaluecsrf.php" method="POST">
    <div class="form-group">
      <label for="nombre">nombre:</label>
      <input type="nombre" class="form-control" name="nombre" placeholder="Enter nombre">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
      <input type="hidden" name="<?php echo $token_id; ?>" value="<?php echo $token_value; ?>">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body> 
</html>
