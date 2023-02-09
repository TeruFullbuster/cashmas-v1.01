<?PHP
	session_start();
	if (isset($_SESSION['COTIZACION'])):	
		$nombre = $_SESSION["nombreS"];
        $ApellidoP = $_SESSION["apellidoPS"];
		$ApellidoM = $_SESSION["apellidoMS"];
        $Mail = $_SESSION["MailS"];
        $pass = $_SESSION["passS"];
		$Celular = $_SESSION["CelularS"];

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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
		<div class="seccion-perfil">
			<div>
				<h3><i class="fa-regular fa-address-card"></i> Información personal</h3>
				<div class="edit-perfil">
					<div style="text-align: center;">
						<img src="../img/perfil.svg" alt="icono perfil"><br>
						<a onclick="document.getElementById('id01').style.display='block'" style="border-bottom: 1px solid; cursor: pointer;">Editar</a>
					</div>
					<div>
						<h5><i class="fa-solid fa-user"></i> <?php echo $nombre.' '.$ApellidoP ?></h5>
						<h5><i class="fa-solid fa-phone"></i> <?php echo $Celular ?></h5>
					</div>
					<div>
						<h5><i class="fa-solid fa-envelope"></i> <i id="mailper"><?php echo $Mail ?> </i></h5>
						<h5><i class="fa-solid fa-lock" ></i> <i> ******** </i></i> <i id="pass" hidden><?php echo $pass ?> </i></h5>
					</div>
				</div>
				<h3><i class="fa-regular fa-address-card"></i> Documentos</h3>
				<div class="cards">
					<div>
						<img src="../img/constancia-fiscal.svg" alt="constancia fiscal">
						<h5>Constancia de Situación Fiscal</h5>
						<ul>
							<li>Debe ser menor a 3 meses.</li>
							<li>La imagen debe ser clara y con información legible.</li>
						</ul>
						<button class="btn-purple">Subir</button>
					</div>
					<div>
						<img src="../img/comprobante-domicilio.svg" alt="comprobante de domicilio">
						<h5>Comprobante de domicilio</h5>
						<ul>
							<li>Debe ser menor a 3 meses.</li>
							<li>La imagen debe ser clara y con información legible.</li>
						</ul>
						<button class="btn-purple">Subir</button>
					</div>
					<div>
						<img src="../img/constancia-fiscal.svg" alt="">
						<h5>Identificación oficial</h5>
						<ul>
							<li>Debe ser INE/IFE.</li>
							<li>La imagen debe ser clara y con información legible.</li>
						</ul>
						<button class="btn-purple" style="margin-bottom: 12px;">Subir frente</button>
						<button class="btn-purple">Subir reverso</button>
					</div>
					<div>
						<img src="../img/estado-bancario.svg" alt="">
						<h5>Estado bancario</h5>
						<ul>
							<li>Debe ser menor a 3 meses.</li>
							<li>La imagen debe ser clara y con información legible.</li>
						</ul>
						<button class="btn-purple">Subir</button>
					</div>
				</div>
				<br><br>
				<label class="text-ligth">Escribe tu CURP, si no lo recuerdas visita el siguiente <a href="https://www.gob.mx/curp/">enlace</a></label>
				<div class="form-btn">
					<input type="text" placeholder="Debe tener 18 dígitos" maxlength="18">
					<button class="btn-coral">Guardar</button>
				</div>
				<br>
				<h3><i class="fa-regular fa-address-card"></i> Información bancaria</h3>
				<label class="text-ligth">Escribe la CLABE de tu cuenta bancaria donde depositaremos tus ganancias.</label>
				<div class="form-btn">
					<input type="text" placeholder="Cuenta CLABE" >
					<button class="btn-coral">Guardar</button>
				</div>
			</div>
			<div>
				<div class="cards-pleca">
						<h6>Tu enlace personal</h6>
						<div class="grid-2">
							<label><strong>https://cashmas.mx/ref/-<?php echo $nombre?>-PB2J9</strong></label>
							<img src="../img/enlace.svg" alt="enlace">
						</div>
						<p>Compártelo en tus redes sociales</p>
						<div class="flex-sec">
							<img src="../img/facebook-circulo.svg" alt="logo facebook">
							<img src="../img/whatsapp-circulo.svg" alt="logo whatsapp">
							<img src="../img/twitter-circulo.svg" alt="logo twitter">
						</div>
					</div>
					<br>
					<div class="cards-pleca card-qr">
						<h6>Muestra tu código personal</h6>
						<img src="../img/codigo-qr.svg" alt="codigo qr">
						<hr>
						<div class="grid-2">
							<label>Descarga y comparte</label>
							<i class="fa-solid fa-download" style="color: #3d6ac2;"></i>
						</div>
					</div>
			</div>
		</div>
	</section>
	<div id="id01" class="w3-modal">
	    <div class="w3-modal-content w3-animate-zoom">
	      <div class="w3-container">
	        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
	        <h2>Editar perfil</h2>
	        <form name="f1" action="" style="padding: 20px 5px;" class="form-modal">
	        	<div>
	        		<input type="text"name="f1t1" placeholder="Nombre(s)" class="input-100"></input>
	        	</div>
		        <div>
		        	<input type="text" name="f1t2" placeholder="Apellido paterno">
		        	<input type="text" name="f1t3" placeholder="Apellido materno">
		        </div>
		        <div>
		        	<input type="text" name="f1t4" placeholder="Correo">
		        	<input type="text" name="f1t5" placeholder="Teléfono (10 dígitos)">
		        </div>
		        <div style="text-align: right;">
		        	<button class="btn-purple2" onclick="document.getElementById('id01').style.display='none'">Cancelar</button>
		        	<button class="btn-purple">Guardar cambios</button>
		        </div>
		    </form>
	      </div>
	    </div>
	</div>
	<script>
		$('#perfil').addClass('active');
		$('#perfil img').attr('src','../img/menu-perfil2.svg');
		document.f1.f1t1.value = "<?php echo $nombre?>";
		document.f1.f1t2.value = "<?php echo $ApellidoP?>";
		document.f1.f1t3.value = "<?php echo $ApellidoM?>";
		document.f1.f1t4.value = "<?php echo $Mail?>";
		document.f1.f1t5.value = "<?php echo $Celular?>";
	</script>
</body>
</html>
<?PHP
	endif;


	?>