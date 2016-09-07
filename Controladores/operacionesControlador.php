<?php

	class OperacionesControlador{

		static function main(){
			 
			//Llamada a la vista
			require_once("Vistas/sumaForm.php");
		}

		public function sumar(){
			require_once("Modelos/operacionesModelo.php");

			$operacion = new operacionesModelo();
			$numero1 = trim($_POST['numero1']);
			$numero2 = trim($_POST['numero2']);

			if (!isset($numero1) || !isset($numero2)) {
				$result = "Zero";
			}else{
				$resultadoSuma = $operacion->sumarNumeros($numero1, $numero2);

				$result = $operacion->getIndex($resultadoSuma);
				
			}

			//Llamada a la vista
			require_once("Vistas/verResultadoSuma.php");
		}

	}