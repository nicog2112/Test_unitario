<?php

// PHPUnit

use PHPUnit\Framework\TestCase;

require_once "ejercicio1.php";


class TestEjercicio1 extends TestCase {

	public function testGenerarNombreArchivoConNombreVacio() {

		// Arrange: crear el contexto
		$nombre = "";
		$extension = "png";

		// Act: ejecutar la funcion
		$nombreArchivo = generarNombreArchivo($nombre, $extension);

		// Assert: afirmar algo
		$this->assertFalse($nombreArchivo);

	}

	public function testGenerarNombreArchivoConExtensionVacia() {

		// Arrange: crear el contexto
		$nombre = "ejemplo";
		$extension = "";

		// Act: ejecutar la funcion
		$nombreArchivo = generarNombreArchivo($nombre, $extension);

		// Assert: afirmar algo
		$this->assertFalse($nombreArchivo);

	}

	public function testGenerarNombreArchivoConExtensionInvalida() {

		// Arrange: crear el contexto
		$nombre = "ejemplo";
		$extension = "bmp";

		// Act: ejecutar la funcion
		$nombreArchivo = generarNombreArchivo($nombre, $extension);

		// Assert: afirmar algo
		$this->assertFalse($nombreArchivo);
	}

	public function testGenerarNombreArchivoConNombreMayuscula() {

		// Arrange: crear el contexto
		$nombre = "EjEmPLo";
		$extension = "jpg";

		// Act: ejecutar la funcion
		$nombreArchivo = generarNombreArchivo($nombre, $extension);

		// Assert: afirmar algo
		$nombreArchivoEsperado = "ejemplo.jpg";

		$this->assertEquals($nombreArchivoEsperado, $nombreArchivo);
	}

}




?>