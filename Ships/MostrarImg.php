<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Controladores/SetPartida.php";
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Funciones.php";

?>
<html>
	<head>
		<title>Mostrar Imagen</title>
			<?php echo Cabeceras(); ?>
		<link rel="stylesheet" href="/ships/estilos/imgestilos.css" type="text/css" />
	</head>
	<body>
		<form action="Inicio.php" method="post">
			<div id="contenido">
				<div id="minimap" > <img src="" />  </div>
				<div id="columna1">
					<p id="localidad1"><img src="" /> </p>
					<p id="localidad2"><img src="" /> </p>
					<p id="localidad3"><img src="" /> </p>
					<p id="localidad4"><img src="" /> </p>
					<p id="localidad5"><img src="" /> </p>
					<p id="localidad6"><img src="" /> </p>
					<p id="localidad7"><img src="" /> </p>
					<p id="localidad8"><img src="" /> </p>
				</div>
				<div id="columna2">		
					<p id="localidad1"><img src="" /> </p>
					<p id="localidad2"><img src="" /> </p>
					<p id="localidad1"><img src="" /> </p>
					<p id="localidad1"><img src="" /> </p>
					<p id="localidad1"><img src="" /> </p>
					<p id="localidad6"><img src="" /> </p>
					<p id="localidad7"><img src="" /> </p>
					<p id="localidad8"><img src="" /> </p>
				</div>
			</div>
</form>
	</body>
</html>