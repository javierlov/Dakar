<?php
$resultado = '';

if( isset($_POST["producto"]) 
and isset($_POST["talle"]) ){

	$producto = $_POST["producto"];	
	$talle = $_POST["talle"];	
	
	
	/// C:\xampp\htdocs\servicio\webservices\webservices.php
	/// http://localhost:8000/servicio/cliente/cliente.php
	$url = "http://localhost/servicio/webservices/webservices.php";
	
	$ch = curl_init($url);
	
	$parametros = "producto=$producto&talle=$talle";
	
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
		<p><label>producto</label><input style='padding:10px;' type="text" name="producto">
		<p><label>talle</label><input style='padding:10px;' type="text" name="talle" value="L">
		<p><input style='padding:10px;' type="submit" value="enviar">
		<h3> <?php 
			if(isset($_POST["producto"])) {
				echo $resultado; 
				unset($_POST["producto"]);
				unset($_POST["talle"]);
			}
			?> 
		</h3>
		</form>
	</body>
</html>