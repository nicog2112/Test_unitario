<?php


function generarNombreArchivo($nombreArchivo, $extension) {

	if (empty($nombreArchivo) || empty($extension)) {
		return false;
	}

	if ($extension != 'gif' && $extension != 'png' && $extension != 'jpg') {
		return false;
	}

	$nombreArchivoFinal = $nombreArchivo . "." . $extension;
	$nombreArchivoFinal = strtolower($nombreArchivoFinal);
	return $nombreArchivoFinal;

}


?>