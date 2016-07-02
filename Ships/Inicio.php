<?php
require_once $_SERVER['DOCUMENT_ROOT']."\ships\Controladores\SetPartida.php";
	//print_r($_REQUEST);	
	//print_r($_SERVER['DOCUMENT_ROOT']);
	
	if( isset($_POST["NuevoJuego"]) ){
		echo "NuevoJuego<br>";
		header("Location: http://localhost/ships/NuevoJuego.php"); 
	}
	
	if( isset($_POST["NuevoMapa"]) ){
		echo "NuevoMapa<br>";
		header("Location: http://localhost/ships/NuevoMapa.php"); 
	}
	
	if( isset($_POST["MostarJugador"]) ){
		echo "MostarJugador<br>";
	}
?>

<html>
	<head>
		<title>NUEVO  JUEGO</title>
	</head>
	<body>
		<form action="Inicio.php" method="post">
			<table>
				<tr>
					<td>
						<input type="text" name="nombre" id="idnombre" value="default" />
					</td>
				</tr>
			</table>
			<br><input type="submit" name="NuevoJuego" value="Nuevo Juego" />
			<br><input type="submit" name="limpiar" value="limpiar" />
		</form>
	</body>
</html>