<?php
/*
*http://www.php.net/manual/en/ref.sockets.php
*/

$host = "192.168.1.33";

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$puerto = 65500;

if (socket_connect($socket, $host, $puerto))
{
	echo "<p>Conexion EXITOSA, puerto:  " . $puerto;
}
else
{
	echo "<p>La conexion TCP no se pudo realizar, puerto: ".$puerto;
}

 socket_close($socket);

?>