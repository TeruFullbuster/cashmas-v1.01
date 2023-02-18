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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
	<section class="sec-center">
		<img src="img/cashmas-logo.svg" alt="logo cashmas" class="img-center">
		<h1>¡Bienvenido!</h1>
		<input id ="mailper" type="text" placeholder="Correo electrónico">
		<input id ="pass" type="password" placeholder="Contraseña">
		<a href="recuperar-cuenta.php">Olvidé mi contraseña</a>
		<button class="btn-purple" onclick="iniciarS();">Iniciar sesión</button>
		<a href="registro.php">Crear cuenta</a>
	</section>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	
	<script src="secciones/js/login.js"></script>
</body>
</html>