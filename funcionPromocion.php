<?php 

class Calculo{
	function calcular($tipoPromocion, $socio) {

		$socio = strtoupper($socio);

		if ($socio =="" || $socio != "SI" && $socio != "NO") {
			return false;
		}

		if($socio == "SI"){
			if ($tipoPromocion == 1) {
				$valorPromocion = 1500;
				$descuentoExtra = ($valorPromocion * 10)/100;
				
			} elseif($tipoPromocion == 2) {
				$valorPromocion = 1600;
				$descuentoExtra = ($valorPromocion * 10)/100;
				
			} elseif($tipoPromocion == 3) {
				$valorPromocion = 1100;
				$descuentoExtra = ($valorPromocion * 10)/100;
				
			}
			$resultado = $valorPromocion - $descuentoExtra;
		}elseif($socio == "NO"){
			if ($tipoPromocion == 1) {
				$resultado = 1500;
			} elseif($tipoPromocion == 2) {
				$resultado = 1600;
			} elseif($tipoPromocion == 3) {
				$resultado = 1100;
			}
		}

		

	
		return $resultado;

	}
}


$calculo = new Calculo;
$resultadoOperacion = $calculo->calcular(1,"si");
echo $resultadoOperacion;



?>