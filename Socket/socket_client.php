<?php
error_reporting(E_ALL);

echo "<h2>TCP/IP Connection</h2>\n";

/* Obtener el puerto para el servicio WWW. */
$service_port = getservbyname('127.0.0.1', '1000');

/* Obtener la dirección IP para el host objetivo. */
$address = gethostbyname('localhost');

/* Crear un socket TCP/IP. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
	echo "<p>socket_create() fallo: razon: " . socket_strerror(socket_last_error()) . "\n";
} else {
	echo "<p>OK.\n";
}

echo "Intentando conectar a '$address' en el puerto '$service_port'...";
$result = socket_connect($socket, $address, $service_port);
if ($result === false) {
	echo "<p>socket_connect() fallo.\nRazon: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
} else {
	echo "<p>OK.\n";
}

$in = "HEAD / HTTP/1.1\r\n";
$in .= "Host: 127.0.0.1\r\n";
$in .= "Connection: Close\r\n\r\n";
$out = '';

echo "<p>Enviando peticion HTTP HEAD ...";
socket_write($socket, $in, strlen($in));
echo "<p>OK.\n";

echo "<p>Leyendo respuesta:\n\n";
while ($out = socket_read($socket, 2048)) {
	echo $out;
}

echo "<p>Cerrando socket...";
socket_close($socket);
echo "<p>OK.\n\n";
?>