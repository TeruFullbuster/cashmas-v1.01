<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
	<section class="sec-center">
		<img src="img/cashmas-logo.svg" alt="logo cashmas" class="img-center">
		<h1>Únete a CashMas.mx</h1>
		<button class="btn-azul"><img src="img/facebook-blanco.svg" alt="logo facebook" style="width: 25px;"> Registrate con Facebook</button>
		<button class="btn-white"><img src="img/google-logo.svg" alt="logo google" style="width: 25px;"> Registrate con Google</button>
		<div class="separador"><hr> o <hr></div>
		<input class="form-control soloLetras" id ="nombre" type="text" placeholder="Nombre(s)">
		<input class="form-control soloLetras" id ="Apaterno" type="text" placeholder="Apellido paterno">
		<input  class="form-control soloLetras" id ="Amaterno"type="text" placeholder="Apellido materno">
		<input class="form-control soloNumeros" id ="Celular" type="text" placeholder="Teléfono celular (10 dígitos" maxlength="10">
		<input id ="email" type="text" placeholder="Correo electrónico">
		<input id ="pass" type="password" placeholder="Contraseña">

		<button class="btn-purple" onclick="RegistroNU();">Registrate</button>
		
		<a href="index.php">Ya tengo cuenta</a>
	</section>

	<script src="../CashMasProud/secciones/js/login.js"></script>
	<script src="../CashMasProud/secciones/js/control.js"></script>
	
</body>
</html>