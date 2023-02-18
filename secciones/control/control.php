<?php




$action = $_POST['action'];


switch ($action) {
	case 'GuardarDatos':
        session_start();
        $_SESSION["COTIZACION"]='OK';

        $_SESSION["nombreS"]=$_POST['nombre'];;
        $_SESSION["apellidoPS"]=$_POST['apellidoP'];
        $_SESSION["apellidoMS"]=$_POST['apellidoM'];
        $_SESSION["MailS"]=$_POST['Mail'];
        $_SESSION["passS"]=$_POST['pass'];
		$_SESSION["CelularS"]=$_POST['Celular'];


		$response = array('response' => 'OK');
		echo json_encode($response);

		break;
	default:
		$response = array('response' => 'no se encontro action',);
		echo json_encode($response);
		die();
		break;
}

