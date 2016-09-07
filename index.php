<?php
	//Incluimos el controlador por defecto
	require 'controladores/operacionesControlador.php';
	
	

	if (isset($_GET['opcion'])) {
		$opcion = $_GET['opcion'];
		switch ($opcion) {
			case 1:
				//print_r($_REQUEST);
				//exit();
				OperacionesControlador::sumar();

				break;
			
			default:
				# code...
				break;
		}

	}else{
		//Lo iniciamos con su método estático main.
		OperacionesControlador::main();
	}

	
?>