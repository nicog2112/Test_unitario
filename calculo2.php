<?php

class Calculo {
	
	public function calcular($numero1,$numero2) {

	$resultado = "";
	if ($numero1 <= 0 or $numero2 <= 0) {
		return false;
	} else if ($numero1 <= $numero2) {
	 	$resultado =  $numero1 / $numero2;
	}else if ($numero1 > $numero2){
		$resultado =  $numero1 * $numero2;
	}

	$resultado=number_format($resultado, 2);

	
	return $resultado;

	}
}

$c = new Calculo;
$resultado = $c->calcular(1,1);
echo $resultado;


?>