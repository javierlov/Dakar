<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Struct/GrillaDatos.php");

/*
$grilla = new GrillaDatos(5,4);


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

$grilla->setDatos($datos);
$grilla->ImprimirTabla(true);
*/
?>
<html>
<head>
<script type='text/javascript' src='/Struct/js/funciones.js'></script> 
<script type='text/javascript' src='/Struct/js/ajaxBuscaDatos.js'></script> 
<title>no pasa nada</title>

<script type="text/javascript">
window.onload = function() {
	CargaGrilla(1);
	
	var arraydatosglobal = RecorrerArrayDatos();
}
</script> 

</head>

<body>

<form id="formulario" name="formulario"  >
<h1 >Tabla HTML</h1>
<div id="grilladatos"></div>
<div id="listado"></div>

<input type="button" onclick="ArrayDatos();" value="carga el dos">

</form>
</body>
</html>