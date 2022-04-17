<?php


/*
 * Si marca == Honda, el descuento es del 20%
 * Si marca == Yamaha, el descuento es del 15%
 * Si marca == Zanella, el descuento es del 10%
 * Por defecto el descuento es del 5%
 *
 * La funcion recibe 2 parametros: marca y monto
 * Debe retornar el monto final a pagar.
 * 
 * La Marca no debe estar vacía
 * El monto debe ser mayor a 0
 * 
 * Si hace falta, agregar validaciones a la función
 * Crear al menos 4 tests
 */


class TallerMoto
{
	public function calcularMontoFinal($marca, $monto) {
		$montoDescuento = 0;
		if ($marca == "" || $monto <= 0){
			return false;
		}
		if ($marca == "Honda") {
			$montoDescuento = $monto * 0.20;
		} else if ($marca == "Yamaha") {
			$montoDescuento = $monto * 0.15;
		} else if ($marca == "Zanella") {
			$montoDescuento = $monto * 0.10;
		} else {
			$montoDescuento = $monto * 0.05;
		}

		$montoFinal = $monto - $montoDescuento;
		return $montoFinal;
	}
}
$tallerMoto = new TallerMoto;
$montoFinal = $tallerMoto->calcularMontoFinal("Titan",1000);
echo $montoFinal;


?>
