<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Controladores/SetPartida.php";
require_once $_SERVER['DOCUMENT_ROOT']."/ships/FuncionesJuego.php";

?>
<html>
	<head>
		<title>Mostrar Turno Actual</title>
			<?php echo Cabeceras(); ?>
		<link rel="stylesheet" href="/ships/estilos/misestilos.css" type="text/css" />
	</head>
	<body>
		<form action="Inicio.php" method="post">
			<div id="contenido">
				<div id="columna1">	<p> Nombre Juego: 
						<?php 
						if (isset($_SESSION["NameGame"] )) {
							echo $_SESSION["NameGame"]; 	
						} ?>	
				</div>
				<div id="columna2"> <p>	
					<?php 
					 	getTurnoActualJuego();					
					?>	
				</div>
				<div id="columna3"> <p>
					<?php 
						getTurnoJugador();					 	
					?>
				</div>
			</div>
</form>
	</body>
</html>