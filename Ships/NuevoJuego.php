<?php
require_once $_SERVER['DOCUMENT_ROOT']."\ships\Controladores\SetPartida.php";
require_once $_SERVER['DOCUMENT_ROOT']."\ships\Controladores\NewGame.php";
	
	
	if( isset($_POST["AgregarMapa"]) ){			
		$nombreNuevoJuego = $_REQUEST["txtNuevoJuego"];
		$NewGame = new NewGame($nombreNuevoJuego);				
		$_SESSION["NewGame"] = serialize($NewGame);
		$_SESSION["NameGame"] = $_REQUEST["txtNuevoJuego"];
		
		header("Location: http://localhost/ships/NuevoJugador.php");
		//header("Location: http://localhost/ships/MostrarJugador.php");
	}
	
	if( isset($_POST["Inicio"]) ){
		header("Location: http://localhost/ships/Index.php");
	}

?>

<html>
	<head>
		<title>Nuevo Juego</title>
		<link rel="stylesheet" href="/ships/estilos/misestilos.css" type="text/css" />
	</head>
	<body>
		<form action="NuevoJuego.php" method="post">

<?php
	if(!isset($_POST["AgregarMapa"]) ){	
?>
			<table>
				<tr>
					<td>
						<label id="botonmenu" >Nombre Juego:</label>
						<input id="botonmenu" type="text" name="txtNuevoJuego" id="idNuevoJuego" value="ShipCommerce" />
					</td>
				</tr>				
			</table>
			<br><input id="botonmenu" type="submit" name="AgregarMapa" value="Aceptar" />
			<br><input id="botonmenu" type="submit" name="Inicio" value="Cancelar" />
<?php
	}
	else{
		echo "<br><input type='submit' name='AgregarJugador' value='Nuevo Jugador' />";
		//echo "<br><input type='submit' name='Inicio' value='Inicio' />";
	}
		
?>			
		</form>
	</body>
</html>
