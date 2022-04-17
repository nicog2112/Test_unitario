<?php

// PHPUnit

use PHPUnit\Framework\TestCase;

require_once "planilla.php";


class TestPlanilla extends TestCase {

	public function testEstadoConNumeroCero() {

		// Arrange: crear el contexto
		$porcentajeAsistencia = 0;
		$planilla = new Planilla;
		// Act: ejecutar la funcion
		$estado =  $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		// Assert: afirmar algo
		$this->assertFalse($estado);

	}

	public function testEstadoConNumeroNegativo() {

		// Arrange: crear el contexto
		$porcentajeAsistencia = -20;
		$planilla = new Planilla;
		// Act: ejecutar la funcion
		$estado =  $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		// Assert: afirmar algo
		$this->assertFalse($estado);

	}

	public function testEsperandoRegular() {

		// Arrange: crear el contexto
		$porcentajeAsistencia = 80;
		$planilla = new Planilla;
		// Act: ejecutar la funcion
		$estado =  $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		// Assert: afirmar algo
		
		$this->assertEquals("Regular", $estado);

	}

	public function testEsperandoCondicional() {

		// Arrange: crear el contexto
		$porcentajeAsistencia = 50;
		$planilla = new Planilla;
		// Act: ejecutar la funcion
		$estado =  $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		// Assert: afirmar algo
		
		$this->assertEquals("Condicional", $estado);

	}

	public function testEsperandoLibre() {

		// Arrange: crear el contexto
		$porcentajeAsistencia = 30;
		$planilla = new Planilla;
		// Act: ejecutar la funcion
		$estado =  $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		// Assert: afirmar algo
		
		$this->assertEquals("Libre", $estado);

	}

	public function testEsperandoRegularSiEsIgualASetentaYCinco() {

		// Arrange: crear el contexto
		$porcentajeAsistencia = 75;
		$planilla = new Planilla;
		// Act: ejecutar la funcion
		$estado =  $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		// Assert: afirmar algo
		
		$this->assertEquals("Regular", $estado);

	}


	public function testEsperandoCondicionalSiEsIgualACuarenta() {

		// Arrange: crear el contexto
		$porcentajeAsistencia = 40;
		$planilla = new Planilla;
		// Act: ejecutar la funcion
		$estado =  $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		// Assert: afirmar algo
		
		$this->assertEquals("Condicional", $estado);

	}






}




?>