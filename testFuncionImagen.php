<?php

// PHPUnit

use PHPUnit\Framework\TestCase;

require_once "funcionImagen.php";



class TestFuncionImagen extends TestCase {

	public function testGenerarNombreArchivoConNombreVacio() {

		// Arrange: crear el contexto
		$nombre = "";
		$extension = "png";
		$imagen = new Imagen;

		// Act: ejecutar la funcion
		$nombreArchivo = $imagen->generarNombreArchivo($nombre, $extension);

		// Assert: afirmar algo
		$this->assertFalse($nombreArchivo);

	}





	public function testGenerarNombreArchivoConExtensionVacia() {

		// Arrange: crear el contexto
		$nombre = "ejemplo";
		$extension = "";
		$imagen = new Imagen;


		// Act: ejecutar la funcion
		$nombreArchivo = $imagen->generarNombreArchivo($nombre, $extension);

		// Assert: afirmar algo
		$this->assertFalse($nombreArchivo);

	}

	public function testGenerarNombreArchivoConExtensionInvalida() {

		// Arrange: crear el contexto
		$nombre = "ejemplo";
		$extension = "bmp";
		$imagen = new Imagen;


		// Act: ejecutar la funcion
		$nombreArchivo = $imagen->generarNombreArchivo($nombre, $extension);

		// Assert: afirmar algo
		$this->assertFalse($nombreArchivo);
	}

	public function testGenerarNombreArchivoConNombreMayuscula() {

		// Arrange: crear el contexto
		$nombre = "EjEmPLo";
		$extension = "jpg";
		$imagen = new Imagen;


		// Act: ejecutar la funcion
		$nombreArchivo = $imagen->generarNombreArchivo($nombre, $extension);

		// Assert: afirmar algo
		$nombreArchivoEsperado = "ejemplo.jpg";

		$this->assertEquals($nombreArchivoEsperado, $nombreArchivo);
	}

}




?>