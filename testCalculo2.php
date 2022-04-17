<?php

use PHPUnit\Framework\TestCase;

require_once 'calculo2.php';

class TestCalculo2 extends TestCase{ 

	public function testEsperandoMultiplicacion(){
		$numero1 = 10;
		$numero2= 4;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($numero1,$numero2);

		$this->assertEquals(40.00, $resultado);
	}

	public function testEsperandoDivicion(){
		$numero1 = 8;
		$numero2= 10;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($numero1,$numero2);

		$this->assertEquals(0.80, $resultado);
	}

	public function testNumeroUnoIgualACero(){
		$numero1 = 0;
		$numero2= 10;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($numero1,$numero2);

		$this->assertFalse($resultado);
	}

}

?>