<?php

require_once $_SERVER['DOCUMENT_ROOT']."/ships/Controladores/SetPartida.php";
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Funciones.php";

	//print_r($_REQUEST);
	
	if( isset($_POST["AgregarJugador"]) ){
		
		$nombre = print_r($_REQUEST["nombre"]);
		$barco = new Ship($nombre, 5);		
		$jugador = new Player($nombre, $barco);
		
		$_REQUEST["nuevojugador"] = $jugador;
	}

	if( isset($_POST["Inicio"]) ){
		echo "Cancelar<br>";
		header("Location: http://localhost/ships/Inicio.php");
	}
?>

<html>
	<head>
		<title>Mostrar Jugador</title>
	</head>
	<body>
		<form action="MostarJugador.php" method="post">
			<table>
				<tr>
					<td>
						<?php 			
							print_r($_REQUEST);				
							$NewGame = unserialize($_SESSION["NewGame"]);
							
							if( isset($_REQUEST["opcion"])){
								if($_REQUEST["opcion"] == 1){
									foreach ($NewGame->getGame() as $game) {
										foreach ($game->getJugadores()  as $jugadores) {
											echo $jugadores->ShowMe();
										}	
									}									
								}								
							}
							
						?>
					</td>
				</tr>			
			</table>			
			<br><input type="submit" name="Inicio" value="Inicio" />
		</form>
	</body>
</html>

