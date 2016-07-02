<?php
require_once $_SERVER['DOCUMENT_ROOT']."\ships\Controladores\SetPartida.php";
require_once $_SERVER['DOCUMENT_ROOT']."\ships\Funciones.php";
require_once $_SERVER['DOCUMENT_ROOT']."\ships\FuncionesJuego.php";

define("MONTOINICIALJUGADOR", 100);

print_r($_REQUEST);

	if( isset($_POST["AgregarJugador"]) ){
			
		$NewGame = unserialize($_SESSION["NewGame"]);

		//print_r($_REQUEST);
		$nombre = $_REQUEST["txtnombre"];
		$jugador = new Player($nombre, MONTOINICIALJUGADOR);
		
		//$nombre, $zona, $puerto
		$zonas = $NewGame->getMap()->getZona($_REQUEST["selectzona"]); 
		$barco = new Ship($nombre);
				
		$NewGame->NewPlayer($jugador);		
		$_SESSION["NewGame"] = serialize($NewGame);
		
		$jugadores; 
		if (isset($_SESSION["NamePlayers"])) {
			$jugadores[] = $jugador;	
			$_SESSION["NamePlayers"] = $jugadores;			
		}
		else {
			$jugadores[] = $jugador;
			$_SESSION["NamePlayers"] = $jugadores;	
		}
		
		//echo $jugador->ShowMe();		
		//header("Location: http://localhost/ships/NuevoJuego.php");
	}
	
	if( isset($_POST["IniciarPartida"]) ){
		
		$NewGame = unserialize($_SESSION["NewGame"]);
		$NewGame->GenerarTurnos();		
		$_SESSION["NewGame"] = serialize($NewGame);
		
		header("Location: http://localhost/ships/Turno.php");
	}
	
	if( isset($_POST["Cancelar"]) ){
		echo "Cancelar<br>";
		header("Location: http://localhost/ships/Inicio.php");
	}
?>

<html>
	<head>
		<title>NUEVO  Jugador</title>
		<link rel="stylesheet" href="/ships/estilos/misestilos.css" type="text/css" />
	</head>
	<body>
		<form action="NuevoJugador.php" method="post">
			<table>
				<tr>
					<td>
						<label id="botonmenu" >Nombre:</label>
						<input id="botonmenu" type="text" name="txtnombre" id="idnombre" value="default" />
					</td>
				</tr>
				<tr>
					<td>
						<label id="botonmenu" >Zona:</label>
						<div id="botonmenu" name="selectzona" id="idzona">
							<?php
								SelectZonas();
							?>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<label id="botonmenu" >Puertos:</label>
						<div id="botonmenu" name="selectzona" id="idzona">
							<?php
								SelectPuertos();
							?>
						</div>
					</td>
				</tr>
				
			</table>
			<br><input id="botonmenu" type="submit" name="AgregarJugador" value="Agregar Jugador" />
			<br><input id="botonmenu" type="submit" name="IniciarPartida" value="Iniciar Partida" />
			<br><input id="botonmenu" type="submit" name="Cancelar" value="Cancelar" />
			
		</form>
	</body>
</html>