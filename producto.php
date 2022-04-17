<?php


/*
 * La funcion debe devolver un porcentaje de descuento según tipo de producto 
 *
 * Si el producto es del tipo FAMILIAR, descuento de 20%
 * Si el producto es del tipo MEDIANO, descuento de 10%
 * Si el producto es del tipo PERSONAL, descuento de 5%
 *
 * AGREGAR VALIDACIONES:
 * El tipo del producto no puede estar vacio
 */



class Producto
{
	public function obtenerPorcentajeDescuento($tipo) {
		
		if($tipo == "" || $tipo != "FAMILIAR" && $tipo != "MEDIANO" && $tipo != "PERSONAL"){
			return false;
		} 
		
		$porcentaje = 0;
		
		$tipo = strtoupper($tipo);// convertir a mayuscula

		if ($tipo == "FAMILIAR") {
			$porcentaje = 20;
		} else if ($tipo == "MEDIANO") {
			$porcentaje = 10;
		} else if ($tipo == "PERSONAL") {
			$porcentaje = 5;
		}

		return $porcentaje;
	}
}
$producto = new Producto;
$porcentajeDescuento = $producto->obtenerPorcentajeDescuento("PERSONAL");
echo $porcentajeDescuento;

?>