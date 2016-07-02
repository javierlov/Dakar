<?php

function producto($producto){
	$productos = array(
	 "zapatos" => 120,
	 "camisa" => 320,
	 "pantalon" => 140,
	);

	if (array_key_exists($producto, $productos)){
		return $producto." cuesta ".$productos[$producto]." $ ";
	}else{
		return "El producto seleccionado no ha sido encontrado";
	}
} 

if(isset($_POST["producto"])){
	print producto($_POST["producto"]);
}



?>