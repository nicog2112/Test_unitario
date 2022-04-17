<?php

// PHPUnit

use PHPUnit\Framework\TestCase;

require_once "funcionPromocion.php";


class TestFuncionPromocion extends TestCase {

	public function testSocioVacio(){
		$socio = "";
		$tipoPromocion = 1;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($tipoPromocion,$socio);

		$this->assertFalse($resultado);
	}

	public function testSocioDistintoASioNO(){
		$socio = "algo";
		$tipoPromocion = 1;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($tipoPromocion,$socio);

		$this->assertFalse($resultado);
	}

	public function testEsperandoMilQuinientos(){
		$socio = "NO";
		$tipoPromocion = 1;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($tipoPromocion,$socio);

		$this->assertEquals(1500, $resultado);
	}

	public function testEsperandoMilSeiscientos(){
		$socio = "NO";
		$tipoPromocion = 2;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($tipoPromocion,$socio);

		$this->assertEquals(1600, $resultado);
	}

	public function testEsperandoMilCien(){
		$socio = "NO";
		$tipoPromocion = 3;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($tipoPromocion,$socio);

		$this->assertEquals(1100, $resultado);
	}

	public function testEsperandoMilTrescientosCincuenta(){
		$socio = "SI";
		$tipoPromocion = 1;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($tipoPromocion,$socio);

		$this->assertEquals(1350, $resultado);
	}

	public function testEsperandoMilCuatroscientosCuarenta(){
		$socio = "SI";
		$tipoPromocion = 2;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($tipoPromocion,$socio);

		$this->assertEquals(1440, $resultado);
	}

	public function testEsperandoNovecientosNoventa(){
		$socio = "SI";
		$tipoPromocion = 3;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($tipoPromocion,$socio);

		$this->assertEquals(990, $resultado);
	}


}




?>