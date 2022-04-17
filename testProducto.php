<?php

// PHPUnit

use PHPUnit\Framework\TestCase;

require_once "producto.php";


class TestProducto extends TestCase {

	public function testTipoVacio(){
		$tipo = "";
		$producto = new Producto;

		$resultado = $producto->obtenerPorcentajeDescuento($tipo);

		$this->assertFalse($resultado);
	}

	public function testEsperandoDescuentoDeVeintePorciento(){
		$tipo = "FAMILIAR";
		$producto = new Producto;

		$resultado = $producto->obtenerPorcentajeDescuento($tipo);

		$this->assertEquals(20, $resultado);
	}

	public function testEsperandoDescuentoDeDiezPorciento(){
		$tipo = "MEDIANO";
		$producto = new Producto;

		$resultado = $producto->obtenerPorcentajeDescuento($tipo);

		$this->assertEquals(10, $resultado);
	}

	public function testEsperandoDescuentoDeCincoPorciento(){
		$tipo = "PERSONAL";
		$producto = new Producto;

		$resultado = $producto->obtenerPorcentajeDescuento($tipo);

		$this->assertEquals(5, $resultado);
	}

	public function testTipoDistinto(){
		$tipo = "PERS";
		$producto = new Producto;

		$resultado = $producto->obtenerPorcentajeDescuento($tipo);

		$this->assertFalse($resultado);
	}



}




?>