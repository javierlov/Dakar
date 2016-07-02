<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/FuncionesMapa.php";
	
	//print_r($_REQUEST);
	
	if( isset($_POST["DetallePuerto"]) ){
		header("Location: http://localhost/ships/MostrarDetallePuerto.php");
	}

	if( isset($_POST["Inicio"]) ){
		header("Location: http://localhost/ships/Inicio.php");
	}
?>

<html>
	<head>
		<title>Mostrar Mapa</title>
		<link rel="stylesheet" href="/ships/estilos/misestilos.css" type="text/css" />
		<script type="text/javascript" src="/ships/js/jquery.js"></script>
		<script type="text/javascript" src="/ships/js/funciones.js"></script>
		
	</head>
	<body>
		<form action="MostrarDetallePuerto.php" method="post">
			<table>
				<tr>
					<td>
						<input type="hidden" name="PUERTO" id="idPUERTO" value="0" />
						<?php						
							getMapaDetalle();
						?>
					</td>
				</tr>			
			</table>
			
			<br><input type="submit" name="Inicio" value="Inicio" />
		</form>
		
	</body>
</html>
