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
			<h2>Incentivos</h2>
			<p><strong>Refiere y gana</strong><br>Cada referido que sumes, te suma a ti también</p>
			<div class="sec-incentivos">
				<p style="text-align: left;">https://cashmas.mx/ref/MAIRA-PB2J9</p>
				<i class="fa-solid fa-link"></i>
				<img src="../img/facebook-circulo.svg" alt="logo facebook">
				<img src="../img/whatsapp-circulo.svg" alt="logo whatsapp">
				<img src="../img/twitter-circulo.svg" alt="logo twitter">
				<img src="../img/codigo-qr.svg" alt="codigo QR" style="border-radius: 0px 10px 10px 0px; ">
			</div>
			<p>Copia tu enlace personal y compártelo con todos tus amigos y conocidos para que se conviertan en <br>referidos, ganando $500 pesos cuando tu referido coloque su primera póliza</p>
		</div>
	</section>
	<i id="mailper" hidden><?php echo $Mail ?> </i>
    <i id="pass" hidden><?php echo $pass ?> </i>
	<script>
		$('#incentivos').addClass('active');
		$('#incentivos img').attr('src','../img/menu-incentivos2.svg');
	</script>
	
</body>
</html>
<?PHP
	endif;


	?>