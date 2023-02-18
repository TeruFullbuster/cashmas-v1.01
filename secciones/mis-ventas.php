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
			<div class="head-btn">
				<h2>Mis cotizaciones</h2>
				<button class="btn-purple" style="width: 90%;" onclick="window.location.href='nueva-cotizacion.php'">Nueva cotización</button>
			</div>
			<br>
			<div class="mis-ventas">
				<div class="table-new" id="tableVentas">
					<div>
						<h5>Cliente</h5>
						<hr class="desk">
						<p>Nombre(s) Apellido Apellido</p>
						<hr class="movil">
					</div>
					<div>
						<h5>Email</h5>
						<hr class="desk">
						<p>prueba@prueba.com</p>
						<hr class="movil">
					</div>
					<div>
						<h5>Tipo de seguro</h5>
						<hr class="desk">
						<p>Auto</p>
						<hr class="movil">
					</div>
					<div>
						<h5>Estatus</h5>
						<hr class="desk">
						<p><i class="fa-sharp fa-solid fa-circle" style="color: #04a33c;"></i> Cotizando</p>
						<hr class="movil">
					</div>
					<div>
						<h5>Fecha</h5>
						<hr class="desk">
						<p>01/12/22</p>
						<hr class="movil">
					</div>
					<div>
						<h5>Prima</h5>
						<hr class="desk">
						<p>$12,000</p>
						<hr class="movil">
					</div>
					<div>
						<h5>Comisión</h5>
						<hr class="desk">
						<p>$500</p>
						<hr class="movil">
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<i id="mailper" hidden><?php echo $Mail ?> </i>
    <i id="pass" hidden><?php echo $pass ?> </i>
	<script>
		$('#ventas').addClass('active');
		$('#ventas img').attr('src','../img/menu-ventas2.svg');
	</script>
</body>

</html>
<?PHP
	endif;


	?>