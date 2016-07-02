<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Struct/GrillaDatos.php");

if(isset($_REQUEST["funcion"])){
	
	if($_REQUEST["funcion"] == "ArrayDatosJSON"){
		try{			
			echo ArrayDatosJSON();						
		}catch (Exception $e){
			echo "<b>fallo ArrayDatos: </b>".$e->getMessage();
		}
	}
	
	if($_REQUEST["funcion"] == "Paginado"){
		try{
			$pagina = $_REQUEST["pagina"];								
			$FuncionFooter = $_REQUEST["FuncionFooter"];
			
			echo GrillaDatosHTML($pagina, $FuncionFooter);			
			
		}catch (Exception $e){
			echo "<b>fallo: </b>".$e->getMessage();
		}	
	}
}

function ArrayDatosJSON(){
	$i = 0;
	$result = '[';		
	foreach(ArrayDatos() as $values){					
	if($i == 0){
		$result .= '{ "ESTADO": "'.$values[0].'", ';				
		$result .= ' "ID": "'.$values[1].'", ';				
		$result .= ' "PAIS": "'.$values[2].'" }';				
	}
	else
		$result .= ',{ "ESTADO": "'.$values[0].'", ';				
		$result .= '{ "ID": "'.$values[1].'", ';				
		$result .= '{ "PAIS": "'.$values[2].'" }';				
	}
	$i++;		
	$result .= ']';
		
	return utf8_encode($result); 		
		
}

function ArrayDatos(){
	$datos = array(
		array(false,1,"Argentina"),
		array(false,2,"Brasil"),
		array(true,3,"Uruguay"),
		array(true,4,"Bolivia"),
		array(false,5,"Peru"),
		array(false,6,"Colombia"),
		array(false,7,"Ecuador"),
		array(false,8,"Chile"),
		array(false,9,"Venezuela"),
		array(false,10,"Paraguay"),
		array(false,11,"España"),
		array(false,12,"Italia"),
		array(true,13,"Francia"),
		array(true,14,"Alemani"),
		array(false,15,"Portugal"),
		array(false,16,"Holanda"),
		array(false,17,"Inglaterra"),
		array(false,18,"Austria"),
		array(false,19,"Irlanda"),
		array(false,20,"Suiza")
	);
	return $datos;
}

function GrillaDatosHTML($pagina, $FuncionFooter){

	$grilla = new GrillaDatos(3,6, $FuncionFooter);

	$grilla->setDatos(ArrayDatos());
	$grilla->ImprimirTabla(true, $pagina);

}