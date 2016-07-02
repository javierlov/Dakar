#!/usr/local/bin/php -q
<?php
error_reporting(E_ALL);

/* Permitir al script esperar para conexiones. */
set_time_limit(0);

/* Activar el volcado de salida implícito, así veremos lo que estamo obteniendo
* mientras llega. */
ob_implicit_flush();

$address = '127.0.0.1';
$port = 10000;

if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
	echo "<p>socket_create() fallo: razon: " . socket_strerror(socket_last_error()) . "\n";
}

if (socket_bind($sock, $address, $port) === false) {
	echo "<p>socket_bind() fallo: razon: " . socket_strerror(socket_last_error($sock)) . "\n";
}

if (socket_listen($sock, 5) === false) {
	echo "<p>socket_listen() fallo: razon: " . socket_strerror(socket_last_error($sock)) . "\n";
}

do {
	if (($msgsock = socket_accept($sock)) === false) {
		echo "<p>socket_accept() fallo: razon: " . socket_strerror(socket_last_error($sock)) . "\n";
		break;
	}
	/* Enviar instrucciones. */
	$msg = "\nBienvenido al Servidor De Prueba de PHP. \n" .
	"Para salir, escriba 'quit'. Para cerrar el servidor escriba 'shutdown'.\n";
	socket_write($msgsock, $msg, strlen($msg));

	do {
		if (false === ($buf = socket_read($msgsock, 2048, PHP_NORMAL_READ))) {
			echo "<p>socket_read() fallo: razon: " . socket_strerror(socket_last_error($msgsock)) . "\n";
			break 2;
		}
		if (!$buf = trim($buf)) {
			continue;
		}
		if ($buf == 'quit') {
			break;
		}
		if ($buf == 'shutdown') {
			socket_close($msgsock);
			break 2;
		}
		$talkback = "PHP: Usted dijo '$buf'.\n";
		socket_write($msgsock, $talkback, strlen($talkback));
		echo "<p>$buf\n";
	} while (true);
	socket_close($msgsock);
} while (true);

socket_close($sock);
?>