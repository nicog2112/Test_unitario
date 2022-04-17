<?php 

class Calculo{
	function calcular($numero1, $numero2) {

		if ($numero1 < 1 || $numero2 < 1) {
			return false;
		}

		if ($numero1 <= $numero2) {
			$resultado = $numero1 / $numero2;
		} else {
			$resultado = $numero1 * $numero2;
		}

		$resultado = number_format($resultado, 3);
		return $resultado;

	}
}


$calculo = new Calculo;
$resultadoOperacion = $calculo->calcular(5,3);
echo $resultadoOperacion;



?>