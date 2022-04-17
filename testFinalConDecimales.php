<?php

// PHPUnit

use PHPUnit\Framework\TestCase;

require_once "finalConDecimales.php";


class TestFinalConDecimales extends TestCase {

	public function testCalcularConNumeroCero() {

		// Arrange: crear el contexto
		$numero1 = 0;
		$numero2 = 5;
		$calculo = new Calculo;
		// Act: ejecutar la funcion
		$resultado =  $calculo->calcular($numero1, $numero2);

		// Assert: afirmar algo
		$this->assertFalse($resultado);

	}

	public function testCalcularEsperandoDivision() {

		// Arrange: crear el contexto
		$numero1 = 5;
		$numero2 = 11;
		$calculo = new Calculo;

		// Act: ejecutar la funcion
		$resultado =  $calculo->calcular($numero1, $numero2);

		// Assert: afirmar algo
		$this->assertEquals(0.455, $resultado);

	}

	public function testCalcularEsperandoMultiplicacion() {

		// Arrange: crear el contexto
		$numero1 = 5.89;
		$numero2 = 4.3333;
		$calculo = new Calculo;

		// Act: ejecutar la funcion
		$resultado =  $calculo->calcular($numero1, $numero2);

		// Assert: afirmar algo
		$this->assertEquals(25.523, $resultado);

	}

}




?>