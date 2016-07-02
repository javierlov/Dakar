<html>
	<head>
		<title>Sin Formulario Acceso</title>
		<link href="Estilos/Vacantes.styles.css" rel="stylesheet" type="text/css" />		
	</head>
	<body>
<h1>Sin Vacantes Aplicar estilo</h1>	
<hr>
<label>sin Nombre</label>
<input id="nombre1" maxlength="25" name="nombre1" style="text-transform:uppercase; width:292px;" type="text" />		
<input class="botonFecha" id="btnFechaDesde4" name="btnFechaDesde4" type="button" value="click"> *
<hr>

<form action="Vacantes.php" id="formTelefonos" method="post" name="formTelefonos" target="iframeProcesando">

<?php
require_once "VacantesDosCol.Form.php";
Get_Formulario();
?>

</form>
</body>
</html>

