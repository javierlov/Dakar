<?php
$socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
socket_bind($socket,'192.168.1.33',65500);
socket_listen($socket);

$cerrar = true;

while ($cerrar){
	echo "Esperando conexion\n";
	$conn = false;

	switch(@socket_select($r = array($socket), $w = array($socket), $e = array($socket), 600)) {
	case 2:
		echo "Conexion rechazada!\n";
		break;
	case 1:
		echo "Conexion aceptada!\n";
		$conn = @socket_accept($socket);
		break;
	case 0:
		echo "Tiempo de espera excedido!\n\n";
		break;
	}

	if ($conn !== false) {
		// communicate over $conn	
		$cerrar = true;
	}else{
		$cerrar = false;
	}
}

?>