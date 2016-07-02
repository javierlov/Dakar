<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/FuncionesMapa.php";
	
?>

<html>
	<head>
		<title>Mostrar Detalle Puerto</title>
		<link rel="stylesheet" href="/ships/estilos/misestilos.css" type="text/css" />
		<script type="text/javascript" src="/ships/js/jquery.js"></script>
		<script type="text/javascript" src="/ships/js/funciones.js"></script>
	</head>
	<body>
		<form action="MostrarDetallePuerto.php" method="post">
			<table>
				<tr>
					<td>
						<?php			
							if (isset($_REQUEST["PUERTO"])) {
								getDetallePuerto($_REQUEST["PUERTO"]);	
							}
							else{
								echo "No existe Puerto";
							}
							
						?>
					</td>
				</tr>			
			</table>	
		</form>
	</body>
</html>