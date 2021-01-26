$(document).ready(function() {
	$('#username').focus();
	errores = ["El campo usuario es requerido.","El campo usuario no admite caracteres especiales.", "El campo Contraseña es requerido.","El nombre de usuario o contraseña son inválidos.","Su usuario se encuentra bloqueado, por favor restablecer la contraseña.", "Login success"];

});

function login(){
	userlogin = $('#username').val();
	userpass = $('#pwd').val();
	//Validaciones
		if (userlogin == '') {
			$('#errorUserlogin').empty().append(errores[0]);
			$('#errorUserlogin').show();
			$('#username').focus();
			 return false;
		}else{
			$('#errorUserlogin').empty();
		}
		if (userpass == '') {
			$('#errorUserpass').empty().append(errores[2]);
			$('#errorUserpass').show();
			$('#pwd').focus();
			 return false;
		}
	//Validaciones
	//Enviar al controlador:
	var form_data = $('#formulario').serializeArray();
	$.ajax({
		url: 'controladores/formularioControlador.php',
		type: 'POST',
		dataType: 'json',
		data: form_data,
	})
	.done(function(result) {
		console.log(result);
		switch(result.login) {
		  case 'failure':
				$('#errorUserlogin').empty().append(errores[3]);
				$('#errorUserpass').empty();
				$('#errorUserlogin').show();
				$('#username').focus();
				$('#pwd').val('');
		    break;
		  case 'success':
		   		$('#resultado').empty().append(errores[5]);
		    break;
  		  case 'token':
 				location.reload();
		    break;
		}
	});
	//Enviar al controlador:
}