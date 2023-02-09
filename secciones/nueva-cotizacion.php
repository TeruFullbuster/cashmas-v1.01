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
		<?php
			if (isset($_GET["auto"])) {
				?>
				<div style="padding: 20px">
					<h4 onclick="window.location.href='nueva-cotizacion.php'" class="link-regresar"><i class="fa-solid fa-caret-left"></i> Regresar</h4>
					<p><strong>Seguro de Auto</strong> -  Ayudanos a conseguirte la mejor cotización</p>
					<section class="formulario" id="formulario">
		
		<div class="sec-form">
			<h1 style="color: #00008f;">Cotiza en segundos tu seguro de auto</h1>
			<p>Tenemos las mejores opciones y precios para ti</p>
			<div class="descript_options mb-3">
				
			</div>

			<form id="formCotizacion" class="form-inputs-axa">
				<input type="hidden" id="pasoId" value="0" />
				<div class="container-flex">
					<div class="row">
						<div class="col-12">
							<div id="error-MultiSlc" class="error-msg">
							</div>
							<select name="marca" id="slc-marcas" class="form-control" style="width: 100%; margin-bottom: 20px;">
								<option value="0" selected disabled>Selecciona una marca</option>
								<option value="">Cargando... </option>
							</select>
							<select name="modelo" id="slc-anio" class="form-control" style="width: 100%; margin-bottom: 20px;">
								<option value="0" selected disabled>Selecciona un modelo</option>
								<option value="">Cargando... </option>
							</select>
							<select name="descripcion" id="slc-descripcion" class="form-control" style="width: 100%; margin-bottom: 20px;">
								<option value="0" selected disabled>Selecciona una descripción</option>
								<option value="">Cargando... </option>
							</select>
							<select name="descripcionCompleta" id="slc-descripcionCompleta" class="form-control" onblur="validInputSLC(this)" style="width: 100%; margin-bottom: 20px;">
								<option value="0" selected disabled>Selecciona un paquete</option>
								<option value="">Cargando... </option>
							</select>
							
						</div>
					</div>
					<div class="">
						<div class="col" >
							<input class="form-control soloLetras" type="text" name="nombre" onblur="validInput(this)"  placeholder="Nombre(s)">
							<div id="error-nombre" class="error-msg" >
							</div>
						</div>
						<div class="col" >
							<input class="form-control " type="date" name="FNacimiento"  max="<?php echo $fechaActual ?>"  onblur="validInput(this)" placeholder="Fecha de nacimiento">
							<div id="error-FNacimiento" class="error-msg" >
							</div>
						</div>
						<div class="col" >
							<input class="form-control soloNumeros" type="text" name="Tel" onblur="validInput(this)" placeholder="Teléfono (10 dígitos)" maxlength="10">
							<div id="error-Tel" class="error-msg " >
							</div>
						</div>
						<div class="col">
							<input class="form-control soloLetras" type="text" name="ApPaterno" onblur="validInput(this)" placeholder="Apellido paterno">
							<div id="error-ApPaterno" class="error-msg">
							</div>
						</div>
						<div class="col-4 mb-3">
							<select class="form-control" onblur="validInput(this)" name="genero" >
								<option value=""  selected>Género</option>
								<option value="0" >Masculino</option>
								<option value="1" >Femenino</option>
							</select>
							<div id="error-genero" class="error-msg">
							</div>
						</div>
						<div class="col-4 mb-3">
							<input class="form-control email"  type="text" name="correo" onblur="validInput(this)" placeholder="Correo electrónico">
							<div id="error-correo" class="error-msg">
							</div>
						</div>
						<div class="col-4 mb-3">
							<input class="form-control soloLetras" type="text" name="ApMaterno" onblur="validInput(this)" placeholder="Apellido materno">
							<div id="error-ApMaterno" class="error-msg">
							</div>
						</div>
						<div class="col-4 mb-3">
							<input class="form-control soloNumeros" type="text" name="CP" maxlength="5" onblur="validInput(this)" placeholder="Código postal">
							<div id="error-CP" class="error-msg">
							</div>
						</div>
						<div class="col-4 mb-3">
							<input class="form-control" type="text" name="CodReferido" onblur="validInput(this)" placeholder="Código de referido (opcional)">
						</div>

					</div>
				</div>
				<br>
				<br>
				<br>
				
				
				<div class="form-2">
					
					<div>
						<button type="submit" class="btn-purple"  id="btnCotizar"style="width: 28%;">Continuar</button>
					</div>
				</div>
			</form>
		</div>
	</section>
				</div> 
					<br>
					
					<label class="text-ligth">Al cotizar confirmas que has leído y aceptas nuestro <a href="" style="color: #3b7bd9;">Aviso de Privacidad.</a></label>
				</div>
				<?php
			}else if (isset($_GET["gmm"])) {
				?>
					<div style="padding: 20px">
					<h4 onclick="window.location.href='nueva-cotizacion.php'" class="link-regresar"><i class="fa-solid fa-caret-left"></i> Regresar</h4>
					<p><strong>Seguro de GMM</strong> -  Cotiza tu seguro y obtén atención médica en accidentes y enfermedades.</p>
					<form action="" class="forms">
						<div>
							<input type="text" placeholder="Nombre(s)">
						</div>
						<br>
						<div>
							<input type="text" placeholder="Apellido paterno">
						</div>
						<br>
						<div>
							<input type="text" placeholder="Apellido materno">
						</div>
						<br>
						<div>
							<select name="" id="" style="width: 27.5%">
								<option value="">Género</option>
							</select>
						</div>
						<br>
						<div>
							<input type="text" placeholder="Fecha de nacimiento">
						</div>
						<br>
						<div>
							<button class="btn-purple" style="width: 28%;">Continuar</button>
						</div>
					</form>
				</div>
				<?php
			}else if (isset($_GET["vida"])) {
				?>
				<div style="padding: 20px">
					<h4 onclick="window.location.href='nueva-cotizacion.php'" class="link-regresar"><i class="fa-solid fa-caret-left"></i> Regresar</h4>
					<p><strong>Seguro de Vida</strong> -  Contrata un seguro de protección y ahorro para ti y tus seres queridos.</p>
					<form action="" class="forms">
						<div>
							<input type="text" placeholder="Nombre(s)">
						</div>
						<br>
						<div>
							<input type="text" placeholder="Apellido paterno">
						</div>
						<br>
						<div>
							<input type="text" placeholder="Apellido materno">
						</div>
						<br>
						<div>
							<input type="text" placeholder="Correo electrónico">
						</div>
						<br>
						<div>
							<input type="text" placeholder="Teléfono (10 dígitos)" maxlength="10">
						</div>
						<br>
						<div>
							<select name="" id="" style="width: 27.5%">
								<option value="">Género</option>
							</select>
						</div>
						<br>
						<div>
							<input type="text" placeholder="Fecha de nacimiento">
						</div>
						<br>
						<div>
							<select name="" id="" style="width: 27.5%">
								<option value="">¿Fumas?</option>
							</select>
						</div>
						<br>
						<div>
							<button class="btn-purple" style="width: 28%;">Enviar</button>
						</div>
					</form>
				</div>
				<?php
			}else{
				?>
					<div style="padding: 20px">
						<h2>Nueva Cotización</h2>
						<label class="text-ligth">Selecciona el seguro que desea cotizar</label>
						<div class="cards3x nuev-cot">
							<div>
								<div class="cards-black">
									<img src="../img/seguro-de-auto.svg" alt="seguro de auto">
									<h5>Seguro de auto</h5>
								</div>
								<br>
								<button class="btn-purple" style="width: 100%" onclick="window.location.href='nueva-cotizacion.php?auto'">Cotizar</button>
							</div>
							<div>
								<div class="cards-black">
									<img src="../img/seguro-de-gastos-medicos.svg" alt="seguro de gastos médicos">
									<h5>Seguro de gastos médicos mayores</h5>
								</div>
								<br>
								<button class="btn-purple" style="width: 100%" onclick="window.location.href='nueva-cotizacion.php?gmm'">Cotizar</button>
							</div>
							<div>
								<div class="cards-black">
									<img src="../img/seguro-de-vida.svg" alt="seguro de vida">
									<h5>Seguro de vida</h5>
								</div>
								<br>
								<button class="btn-purple" style="width: 100%" onclick="window.location.href='nueva-cotizacion.php?vida'">Cotizar</button>
							</div>
						</div>
					</div>
				<?php
			}
		?>
		
	</section>
	<i id="mailper" hidden><?php echo $Mail ?> </i>
    <i id="pass" hidden><?php echo $pass ?> </i>
	<script>
		$('#nueva-cotizacion').addClass('active');
		$('#nueva-cotizacion img').attr('src','../img/menu-nueva-cotizacion2.svg');
	</script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="js/funciones.js"></script>
	<script src="js/control.js"></script>
</body>
</html>
<?PHP
	endif;


	?>