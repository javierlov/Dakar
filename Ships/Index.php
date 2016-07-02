<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Controladores/SetPartida.php";
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Funciones.php";

	$file = "http://localhost/ships/Index.php"; 
	
	if( isset($_POST["NuevoJuego"]) ){
		$file = "http://localhost/ships/NuevoJuego.php"; 
	}
	
	if( isset($_POST["NuevoTurno"]) ){
		$file = "http://localhost/ships/Turno.php"; 
		//header("Location: http://localhost/ships/Turno.php");
	}
	
	if( isset($_POST["TurnoActual"]) ){
		$file = "http://localhost/ships/TurnoActual.php"; 
		//header("Location: http://localhost/ships/Turno.php");
	}
	
	if( isset($_POST["MostarMapaDetalles"]) ){
		$file = "http://localhost/ships/MostarMapaDetalles.php"; 
	}
	
		
	
	if( isset($_POST["MostrarImg"]) ){
		$file = "http://localhost/ships/MostrarImg.php"; 
	}
	
	
	if( isset($_POST["NuevoMapa"]) ){
		$file = "http://localhost/ships/NuevoMapa.php"; 
	}
	
	
	if( isset($_POST["AgregarJugador"]) ){
		$file = "http://localhost/ships/NuevoJugador.php"; 
	}


	if( isset($_POST["Inicio"]) ){
		$NewGame = getGameSerialize();		
		$NewGame->setRecursoPuerto();
		$NewGame->getPuertoRecursos();
		$texarea = $NewGame->getPuertoRecursos();
		
			/*		
		$file = "http://localhost/ships/Index.php";
		$sessionactual = implode("<p>",$_SESSION);		 
		$texarea = "Archivo: ".$sessionactual;
			 * 
			 */
		//header("Location: http://localhost/ships/Index.php");
	}
	else {
		$texarea = "Archivo: ".$file;	
	}
	
?>

<html>
	<head>
		<title>NUEVO  JUEGO</title>
		<?php echo Cabeceras(); ?>
		<link rel="stylesheet" href="/ships/estilos/misestilos.css" type="text/css" />
	</head>
	<body>		

		<form action="Index.php" method="post">			
		
		<div id="contenedor">
			<div id="izquierda">
				<p>Opciones</p>
				<div id="contenidos">
					<div id="columna1">
						<input id="botonmenu" type="submit" name="NuevoJuego" value="Nuevo Juego" />
					</div>
					<div id="columna2">
						<input id="botonmenu" type="submit" name="AgregarJugador" value="Agregar Jugador" />
					</div>
					<div id="columna3">
						<input id="botonmenu" type="submit" name="NuevoTurno" value="Nuevo Turno" />
					</div>
					<div id="columna3">
						<input id="botonmenu" type="submit" name="TurnoActual" value="Turno Actual" />
					</div>
					<div id="columna3">
						<input id="botonmenu" type="submit" name="MostarMapaDetalles" value="Mostar Mapa" />
					</div>
					<div id="columna3">
						<input id="botonmenu" type="submit" name="Inicio" value="Inicio" />
					</div>
					<div id="columna3">
						<input id="botonmenu" type="submit" name="MostrarImg" value="Mostrar Imgen" />
					</div>
					<div id="columna3">
						<input id="botonmenu" class="btnVolver" type="button" value="Volver" onClick="history.back(-1);" />
					</div>
					<div id="columna3" >
						<label id="labeltitulos" readonly="true" 
						 style="height:400px width:200px "><?php echo $texarea ?></textarea>
					</div>
					
				</div>		
								
			</div>
			<div id="derecha">
				<h1>Juego 
					<?php 
						if (isset($_SESSION["NameGame"] )) {
							echo $_SESSION["NameGame"]; 	
						}						
					?></h1>
				<iframe id="iframeProcesando" name="iframeProcesando" src="<?= $file ?>" style="height:600px; width:100%;"></iframe>
			</div>
		</div>
			
		</form>
	</body>
</html>