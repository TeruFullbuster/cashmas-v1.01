<?PHP
	session_start();
	if (isset($_SESSION['COTIZACION'])):
		$nombre = $_SESSION["nombreS"];
		$Mail = $_SESSION["MailS"];
        $pass = $_SESSION["passS"];
		

?>
<!DOCTYPE html>
<html lang="es">
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
		<div>
			<div class="titulos">
				<h2>¡<span><?php echo $nombre ?></span> Bienvenido a CashMas!</h2>
				<p>Sigue las instrucciones para comenzar a generar ingresos y dar seguimiento a tus prospectos y ventas.</p>
			</div>
			<div class="sec-pasos">
				<div>
					<h4>Paso 1</h4>
					<p>Ingresa a <strong>Mi Perfil,</strong> completa tu información personal y carga tu documentacón oficial.</p>
				</div>
				<div class="cards">
					<div>
						<img src="../img/constancia-fiscal.svg" alt="constancia fiscal">
						<h5>Constancia de Situación Fiscal</h5>
					</div>
					<div>
						<img src="../img/comprobante-domicilio.svg" alt="comprobante de domicilio">
						<h5>Comprobante de domicilio</h5>
					</div>
					<div>
						<img src="../img/constancia-fiscal.svg" alt="">
						<h5>Identificación oficial</h5>
					</div>
					<div>
						<img src="../img/estado-bancario.svg" alt="">
						<h5>Estado bancario</h5>
					</div>
				</div>
				<div>
					<h4>Paso 2</h4>
					<p>Conoce los productos que puedes comercializar.</p>
				</div>
				<div class="cards3x">
					<div>
						<div class="cards-black">
							<img src="../img/seguro-de-auto.svg" alt="seguro de auto">
							<h5>Seguro de auto</h5>
						</div>
						<p>Un seguro de auto te asiste en caso de algún imprevisto y te ampara ante daños a terceros, robos o pérdida total convirtiéndose en la protección financiera que necesitas.</p>
					</div>
					<div>
						<div class="cards-black">
							<img src="../img/seguro-de-gastos-medicos.svg" alt="seguro de gastos médicos">
							<h5>Seguro de gastos médicos mayores</h5>
						</div>
						<p>Con una póliza médica podrás obtener atención médica de alta calidad ante cualquier enfermedad o imprevisto que ponga en riesgo tu salud y la de tu familia, además es una herramienta financiera para solventar estos gastos.</p>
					</div>
					<div>
						<div class="cards-black">
							<img src="../img/seguro-de-vida.svg" alt="seguro de vida">
							<h5>Seguro de vida</h5>
						</div>
						<p>Contar con un Seguro de Vida te ayuda a recibir el apoyo para solventar tus gastos en caso de enfermedad o fallecimiento, además garantiza la estabilidad económica de tus seres queridos en el futuro.</p>
					</div>
				</div>
				<div>
					<h4>Paso 3</h4>
					<p>Comparte tu propio código a tus conocidos para que coticen y adquieran sus productos de protección.</p>
				</div>
				<div class="col-2">
					<div class="cards-pleca">
						<h6>Tu enlace personal</h6>
						<div class="grid-2">
							<label><strong>https://cashmas.mx/ref/-<?php echo $nombre?>	-PB2J9</strong></label>
							<img src="../img/enlace.svg" alt="enlace">
						</div>
						<p>Compártelo en tus redes sociales</p>
						<div class="flex-sec">
							<img src="../img/facebook-circulo.svg" alt="logo facebook">
							<img src="../img/whatsapp-circulo.svg" alt="logo whatsapp">
							<img src="../img/twitter-circulo.svg" alt="logo twitter">
						</div>
					</div>
					<div class="cards-pleca card-qr">
						<h6>Muestra tu código personal</h6>
						<img src="../img/codigo-qr.svg" alt="codigo qr">
					</div>
				</div>
				<div>
					<h4>Paso 4</h4>
					<p>Ingresa a Nueva cotización y captura los datos de tus recomendados para que reciban cotizaciones y atención de inmediato.</p>
				</div>
				<div class="cards3x">
					<div>
						<div class="cards-black">
							<img src="../img/seguro-de-auto.svg" alt="seguro de auto">
							<h5>Seguro de auto</h5>
						</div>
						<h6>Cotizar</h6>
					</div>
					<div>
						<div class="cards-black">
							<img src="../img/seguro-de-gastos-medicos.svg" alt="seguro de gastos médicos">
							<h5>Seguro de gastos médicos mayores</h5>
						</div>
						<h6>Cotizar</h6>
					</div>
					<div>
						<div class="cards-black">
							<img src="../img/seguro-de-vida.svg" alt="seguro de vida">
							<h5>Seguro de vida</h5>
						</div>
						<h6>Cotizar</h6>
					</div>
				</div>
				<div>
					<h4>Paso 5</h4>
					<p>Da seguimiento al progreso y avance de tus ventas ingresando a <strong>Mis prospectos.</strong></p>
				</div>
				<div class="table-new" id="tableProspectos" >
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
						<h5>Ver detalle</h5>
						<hr class="desk">
						<p><i class="fa-solid fa-eye"></i></p>
						<hr class="movil">
					</div>
					
				</div>
				<div>
					<h4>Paso 6</h4>
					<p>Puedes llevar el control sobre tus ventas y ganancias en el apartado <strong>Mis ventas.</strong> </p>
				</div>
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
		$('#inicio').addClass('active');
		$('#inicio img').attr('src','../img/menu-inicio2.svg');
	</script>
</body>
</html>
<?PHP
	endif;


	?>