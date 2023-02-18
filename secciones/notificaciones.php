<?PHP
	session_start();
	if (isset($_SESSION['COTIZACION'])):
		$nombre = $_SESSION["nombreS"];
		$Mail = $_SESSION["MailS"];
        $pass = $_SESSION["passS"];
		

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<section class="head" >
		<img src="../img/cashmas-logo.svg" alt="logo cashmas" >
		<h1 class="movil" id="bar" style="text-align: center;" onclick="openMenu()"><i class="fa-solid fa-bars"></i></h1>
		<h1 style="display: none; text-align: center;" id="close" onclick="closeMenu();"><i class="fa-solid fa-xmark"></i></h1>
	</section>
	<section class="secciones">
		<?php 
			include('./menu.php');
		?>
		<div style="padding: 20px">
			<h2>Notificaciones</h2>
			<div class="card-not">
				<img src="../img/notificacion-nueva.svg" alt="notificación nueva">
				<div>
					<h3>Bienvenido (Título)</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas justo at lacus elementum volutpat. Cras nulla magna, finibus eu feugiat eget... <strong>Ver más</strong> (Mensaje)</p>
				</div>
				<h4>30 Ago <br>12:35 pm</h4>
			</div>
			<br>
			<div class="card-not">
				<img src="../img/notificacion-leida.svg" alt="notificación leida">
				<div>
					<h3>Ahora eres parte de Referido Inteligente(Título)</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas justo at lacus elementum volutpat. Cras nulla magna, finibus eu feugiat eget... <strong>Ver más</strong> (Mensaje)</p>
				</div>
				<h4>28 Ago<br>9:40 am</h4>
			</div>
		</div>
	</section>
	<i id="mailper" hidden><?php echo $Mail ?> </i>
    <i id="pass" hidden><?php echo $pass ?> </i>
	<script>
		$('#notificaciones').addClass('active');
		$('#notificaciones img').attr('src','../img/menu-notificaciones2.svg');
	</script>
</body>
</html>
<?PHP
	endif;


	?>