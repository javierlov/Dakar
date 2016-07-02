<?php
if(isset($_POST["producto"])){
	$producto = $_POST["producto"];
	
	// C:\xampp\htdocs\servicio\webservices\webservices.php
	// http://localhost:8000/servicio/cliente/cliente.php
	$url = "http://localhost/servicio/webservices/webservices.php";
	
	$ch = curl_init($url);
	
	$parametros = "producto=$producto";
	
	curl_setopt($ch, CURLOPT_POST, 1);
	
	curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);	
		
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$resultado = curl_exec($ch);
	
	 curl_close($ch);
	
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	</head>
	
	<body>
	<h1>Cliente</h1>
	seleccione un producto
	<hr>
		<form method="post" action="">
		<input type="text" name="producto">
		<input type="submit" value="enviar">
		<h3> <?php 
			if(isset($_POST["producto"])) 
				echo $resultado; ?> 
		</h3>
		</form>
	</body>
</html>