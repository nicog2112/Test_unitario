<?php

use PHPUnit\Framework\TestCase;

require_once 'Calculo.php';

class TestCalculo extends TestCase{ 

	public function testCalcularDescuentoMontoNegativo(){
		$monto = -100;
		$calculo = new Calculo;

		$descuento = $calculo->calcularDescuento($monto);

		$this->assertEquals(10, $descuento);
	}

	public function testCalcularDescuentoMontoCero(){
		$monto = 0;
		$calculo = new Calculo;

		$descuento = $calculo->calcularDescuento($monto);

		$this->assertEquals(0,$descuento);
	}

}

?>