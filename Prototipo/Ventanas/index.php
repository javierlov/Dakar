<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Game.Vista.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Game.Partida.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Game.Jugador.php");

$nuevaPartida = new Partida('partida');

$Jug1 = new Jugador('ROBOT1');
$Jug2 = new Jugador('ROBOT2');
$Jug3 = new Jugador('ROBOT3');

$nuevaPartida->AgregarJugador($Jug1);
$nuevaPartida->AgregarJugador($Jug2);
$nuevaPartida->AgregarJugador($Jug3);

$vista = new Vista($nuevaPartida);

$vista->Dibujar();
	