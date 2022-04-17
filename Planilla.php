<?php


/*
 * Si el porcentaje de asistencia del alumno es >= 75
 * el alumno es Regular
 *
 * Si el porcentaje de asistencia del alumno es < 75 y >= 40
 * el alumno es Condicional
 *
 * Si el porcentaje de asistencia del alumno es < 40
 * el alumno es Libre
 *
 * AGREGAR VALIDACIONES:
 * El porcentaje no puede ser negativo
 */



class Planilla
{
	public function obtenerEstadoPorAsistencia($porcentajeAsistencia) {

		$estado = "";

		if ($porcentajeAsistencia <= 0) {
			return false;
		}


		if ($porcentajeAsistencia >= 75) {
			$estado = "Regular";
		} else if ($porcentajeAsistencia >= 40) {
			$estado = "Condicional";
		} else {
			$estado = "Libre";
		}

		return $estado;
	}
}


$planilla = new Planilla;
$estadoAlumno = $planilla->obtenerEstadoPorAsistencia(15);
echo $estadoAlumno;



?>