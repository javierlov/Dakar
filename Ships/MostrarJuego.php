<?php
require_once $_SERVER['DOCUMENT_ROOT']."\ships\Controladores\SetPartida.php";
require_once $_SERVER['DOCUMENT_ROOT']."\ships\clases\Player.php";
require_once $_SERVER['DOCUMENT_ROOT']."\ships\clases\Ship.php";

	//print_r($_REQUEST);
	
	
	if( isset($_POST["AgregarJugador"]) ){
		//print_r($_SERVER['DOCUMENT_ROOT']);
		//print_r($_REQUEST);
		
		$nombre = print_r($_REQUEST["nombre"]);
		$barco = new Ship($nombre, 5);		
		$jugador = new Player($nombre, $barco);
		
		$_REQUEST["nuevojugador"] = $jugador;
	}

	if( isset($_POST["Inicio"]) ){
		//echo "Cancelar<br>";
		header("Location: http://localhost/ships/Inicio.php");
	}
?>

<html>
	<head>
		<title>Mostrar Jugador</title>
	</head>
	<body>
		<form action="NuevoJugador.php" method="post">
			<table>
				<tr>
					<td>
						<?php						
							$NewGame = unserialize($_SESSION["NewGame"]);
							//print_r($NewGame);
							echo $NewGame->ShowMe();
						?>
					</td>
				</tr>
			
			</table>
			
			<br><input type="submit" name="Inicio" value="Inicio" />
		</form>
	</body>
</html>