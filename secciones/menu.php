<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<ul class="menu" id="menu">
		<li id="inicio" onclick="window.location.href='inicio.php'">
			<img src="../img/menu-inicio1.svg" > Inicio
		</li>
		<li id="perfil" onclick="window.location.href='perfil.php'">
			<img src="../img/menu-perfil1.svg" >Mi Perfil
		</li>
		<li id="nueva-cotizacion" onclick="window.location.href='nueva-cotizacion.php'">
			<img src="../img/menu-nueva-cotizacion1.svg" > Nueva cotización
		</li>
		<li id="prospectos" onclick="window.location.href='mis-prospectos.php'">
			<img src="../img/menu-prospectos1.svg" > Mis prospectos
		</li>
		<li id="ventas" onclick="window.location.href='mis-ventas.php'">
			<img src="../img/menu-ventas1.svg"> Mis ventas
		</li>
		<li id="incentivos" onclick="window.location.href='incentivos.php'">
			<img src="../img/menu-incentivos1.svg" > Incentivos
		</li>
		<li id="notificaciones" onclick="window.location.href='notificaciones.php'">
			<img src="../img/menu-notificaciones1.svg" > Centro de notificaciones
		</li>
		<li id="cerrar-sesion" onclick="CerrarS();">
			<img src="../img/menu-cerrar-sesion1.svg" > Cerrar sesión
		</li>

	</ul>
	<script src="../secciones/js/login.js"></script>
	<script>
		$('.menu #inicio').hover(function() {
  			$('#inicio img').attr('src','../img/menu-inicio2.svg');
		}, function() {
    		$('#inicio img').last().attr('src','../img/menu-inicio1.svg');
  		});

  		$('.menu #perfil').hover(function() {
  			$('#perfil img').attr('src','../img/menu-perfil2.svg');
		}, function() {
    		$('#perfil img').last().attr('src','../img/menu-perfil1.svg');
  		});

  		$('.menu #nueva-cotizacion').hover(function() {
  			$('#nueva-cotizacion img').attr('src','../img/menu-nueva-cotizacion2.svg');
		}, function() {
    		$('#nueva-cotizacion img').last().attr('src','../img/menu-nueva-cotizacion1.svg');
  		});

  		$('.menu #prospectos').hover(function() {
  			$('#prospectos img').attr('src','../img/menu-prospectos2.svg');
		}, function() {
    		$('#prospectos img').last().attr('src','../img/menu-prospectos1.svg');
  		});

  		$('.menu #ventas').hover(function() {
  			$('#ventas img').attr('src','../img/menu-ventas2.svg');
		}, function() {
    		$('#ventas img').last().attr('src','../img/menu-ventas1.svg');
  		});

  		$('.menu #incentivos').hover(function() {
  			$('#incentivos img').attr('src','../img/menu-incentivos2.svg');
		}, function() {
    		$('#incentivos img').last().attr('src','../img/menu-incentivos1.svg');
  		});

  		$('.menu #notificaciones').hover(function() {
  			$('#notificaciones img').attr('src','../img/menu-notificaciones2.svg');
		}, function() {
    		$('#notificaciones img').last().attr('src','../img/menu-notificaciones1.svg');
  		});

  		$('.menu #cerrar-sesion').hover(function() {
  			$('#cerrar-sesion img').attr('src','../img/menu-cerrar-sesion2.svg');
		}, function() {
    		$('#cerrar-sesion img').last().attr('src','../img/menu-cerrar-sesion1.svg');
  		});
			
		
	</script>
<script>
		function openMenu(){
			$("#menu").css('display','block');
			$("#menu").css('position','absolute');
			$("#bar").css('display','none');
			$("#close").css('display','block');
		}
		function closeMenu(){
			$("#menu").css('display','none');
			$("#bar").css('display','block');
			$("#close").css('display','none');
		}
	</script>


