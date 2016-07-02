<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/FuncionesMapa.php";

//print_r($_REQUEST);
	
?>

<html>
	<head>
		<title>Mostrar Detalle Recurso</title>
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
							
							if (isset($_REQUEST["RECURSO"])) {
									getDetalleRecurso($_REQUEST["RECURSO"]);
							}
							else{
								echo "No existe RECURSO";
							}
							
						?>
					</td>
				</tr>			
			</table>	
		</form>
	</body>
</html>