<?php

use PHPUnit\Framework\TestCase;

require_once 'TallerMoto.php';

class TestTallerMoto extends TestCase{ 

	public function testEsperandoDescuentoDeCincoPorciento(){
		$marca = "Mondial";
		$monto= 1000;
		$tallerMoto = new TallerMoto;

		$resultado = $tallerMoto->calcularMontoFinal($marca, $monto);

		$this->assertEquals(950, $resultado);
	}

	public function testEsperandoDescuentoDeDiezPorciento(){
		$marca = "Zanella";
		$monto= 1000;
		$tallerMoto = new TallerMoto;

		$resultado = $tallerMoto->calcularMontoFinal($marca, $monto);

		$this->assertEquals(900, $resultado);
	}

	public function testEsperandoDescuentoDeQuincePorciento(){
		$marca = "Yamaha";
		$monto= 1000;
		$tallerMoto = new TallerMoto;

		$resultado = $tallerMoto->calcularMontoFinal($marca, $monto);

		$this->assertEquals(850, $resultado);
	}

	public function testEsperandoDescuentoDeVeintePorciento(){
		$marca = "Honda";
		$monto= 1000;
		$tallerMoto = new TallerMoto;

		$resultado = $tallerMoto->calcularMontoFinal($marca, $monto);

		$this->assertEquals(800, $resultado);
	}


	public function testMarcaVacia(){
		$marca = "";
		$monto= 1000;
		$tallerMoto = new TallerMoto;

		$resultado = $tallerMoto->calcularMontoFinal($marca, $monto);

		$this->assertFalse($resultado);
	}

	public function testMontoCero(){
		$marca = "Honda";
		$monto= 0;
		$tallerMoto = new TallerMoto;

		$resultado = $tallerMoto->calcularMontoFinal($marca, $monto);

		$this->assertFalse($resultado);
	}



	
}

?>