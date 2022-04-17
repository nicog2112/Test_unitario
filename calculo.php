<?php

class Calculo {
	
	public function calcularDescuento($monto) {

	$descuento = 0;
	if ($monto > 2000) {
		$descuento = $monto * 0.15;
	} else if ($monto > 1000) {
	 	$descuento = $monto * 0.05;
	}

	return $descuento;

	}
}

$c = new Calculo;
$descuento = $c->calcularDescuento(5000);
echo $descuento;


?>