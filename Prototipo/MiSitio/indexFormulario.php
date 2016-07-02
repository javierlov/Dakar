<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Formulario Acceso</title>
		<link href="Estilos/styles.css" rel="stylesheet" type="text/css" />		
	</head>
	<body>
<h1>Aplicar estilo</h1>	
<hr>
<?php
echo '<a>hola mate </a><br>';

require_once "Formulario/Formulario.php";

$f = new Formulario('celda','formuid');

$f->NuevoRegistro(true,'celda','formuid');

$f->NuevaCelda('Titulo :','celda','formuid');

$f->NuevoRegistro(false,'celda','formuid');

$f->NuevaCelda('prim','celda','formuid');
$f->NuevaCelda('segundo','celda','formuid');
$f->NuevaCelda('segundo','celda','formuid');
$f->NuevaCelda('tercero','celda','formuid');

$f->NuevoRegistro(false,'celda','formuid');
$f->NuevaCelda('.','celda','formuid');
$f->NuevoRegistro(false,'celda','formuid');

$f->NuevaCelda('prim','celda','formuid');
$f->NuevaCelda('segundo','celda','formuid');
$f->NuevaCelda('segundo','celda','formuid');
$f->NuevaCelda('tercero','celda','formuid');

//$f->test();
echo $f->DibujarFormulario();

?>
	</body>
</html>
