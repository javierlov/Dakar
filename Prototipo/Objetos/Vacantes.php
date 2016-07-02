<html>
	<head>
		<title>Formulario Acceso</title>
		<link href="Estilos/Vacantes.styles.css" rel="stylesheet" type="text/css" />		
	</head>
	<body>
<h1>Aplicar estilo</h1>	
<hr>
	<div style="margin-left:30px; margin-top:8px;">
					<label>Torre</label>
					<input id="torre" maxlength="8" name="torre" style="width:41px;" type="text" />
					<label>Manzana</label>
					<input id="manzana" maxlength="8" name="manzana" style="width:41px;" type="text" />
					<label>Sector</label>
					<input id="sector" maxlength="8" name="sector" style="width:41px;" type="text" />
					<label>CP</label>
					<input id="cp" maxlength="12" name="cp" style="width:67px;" type="text" /> *
				</div>
<hr>

<form action="SinVacantes.php" id="formTelefonos" method="post" name="formTelefonos" target="iframeProcesando">

<?php
require_once "Vacantes.Form.php";
Get_Formulario();
?>

</form>
</body>
</html>

