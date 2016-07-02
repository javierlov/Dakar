<?php

function producto($producto, $talle){
	
	$productos = array(
		'zapatos' => '100',
		'camisa' => '200',
		'pantalon' => '300',
		'collar' => '400'
	);
	
	$productos = array();	
	$productos['zapatos'] = array('L' => '100','S' => '1100');
	$productos['camisa'] = array('L' => '200','S' => '1200');
	$productos['pantalon'] = array('L' => '300','S' => '1300');
		
	if (array_key_exists($producto, $productos) and array_key_exists($talle, $productos[$producto]) ){
		return $producto." (talle ".$talle.") cuesta ".$productos[$producto][$talle]." $ ";		
	}else{
		return "El producto seleccionado no ha sido encontrado";
	}
} 

if(isset($_POST["producto"])){
	print producto($_POST["producto"], $_POST["talle"]);
}






