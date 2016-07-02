<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Controladores/SetPartida.php";
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Funciones.php";
 
function getTurnoJuego(){
	$NewGame = getGameSerialize();		
	$turno = $NewGame->getGame()->getTurnoActual();
	echo "<p> Turno Actual: ".$turno;	
	$turno++;
	echo ". Proximo turno: ".$turno;	
	$NewGame->getGame()->setTurnoActual($turno);
	echo ". Ultimo Turno: ".$NewGame->getGame()->getUltimoTurno();
	setGameSerialize($NewGame);
}

function getTurnoActualJuego(){
	$NewGame = getGameSerialize();		
	$turno = $NewGame->getGame()->getTurnoActual();
	echo "<p> Turno Actual: ".$turno;	
	$turno++;
	echo ". Proximo turno: ".$turno;	
	echo ". Ultimo Turno: ".$NewGame->getGame()->getUltimoTurno();
	//setGameSerialize($NewGame);
}


function getTurnoJugador(){
	$NewGame = getGameSerialize();
		
	echo  "Jugador : ".$NewGame->getGame()->getJugadorTurno()->getNombre();
	echo  "; Oro : ".$NewGame->getGame()->getJugadorTurno()->getMonto();
	echo  "; Puntos Victoria: ".$NewGame->getGame()->getJugadorTurno()->getPuntosVictoria();
	echo  "<p>Detalles Barco. <p>Nombre : ".$NewGame->getGame()->getJugadorTurno()->getBarco()->getNombre();
	echo  "; Capacidad : ".$NewGame->getGame()->getJugadorTurno()->getBarco()->getCapacidad();
	echo  "; Posicion : ".$NewGame->getGame()->getJugadorTurno()->getBarco()->getPosicion();
	echo  "; Carga : ".$NewGame->getGame()->getJugadorTurno()->getBarco()->getCarga();
	echo  "; Valor : ".$NewGame->getGame()->getJugadorTurno()->getBarco()->getValor();
	echo  "; Compras : ".$NewGame->getGame()->getJugadorTurno()->getBarco()->getCompras();
	
	echo  "; Ventas : ".$NewGame->getGame()->getJugadorTurno()->getBarco()->getVentas();
	echo  "<p> AccionesContables : ";
	//echo  "<p>".var_dump($NewGame->getGame()->getJugadorTurno()->getAccionesContables());
	
	echo "<div class='botonmenu' > <table>";
	$i = 0;
	foreach ($NewGame->getGame()->getJugadorTurno()->getAccionesContables() as $value) {
		//echo  "<p>".var_dump($value);
		echo "<tr value=".$i."><td>";
		echo "  ".$value->getNombre()." ".$value->getValor()." ".$value->getEstado();
		$i+=1;
		echo "</td></tr>";
	}
	echo "</select></div>";
	
	//echo  "Jugador : ".$NewGame->getGame()->getJugadorTurno()->ShowMe();
}

function SelectZonas(){
	$NewGame = getGameSerialize();
	$i = 0;
	
	echo "<div> <select name='selectzona' id='idselectzona' class='botonmenu' >";
	foreach ($NewGame->getZonas() as $value) {
		//echo  "<p>".var_dump($value);
		echo "<option value=".$i.">";
		echo "  ".$value->getNombre();
		$i+=1;
		echo "</option>";
	}
	echo "</select></div>";
}

function SelectPuertos(){
	$NewGame = getGameSerialize();
	$i = 0;
	
	echo "<div> <select name='selectpuerto' id='idselectpuerto' class='botonmenu' >";
	foreach ($NewGame->getPuertos() as $value) {
		echo "<option value=".$i.">";
		echo "  ".$value->getNombre();
		$i+=1;
		echo "</option>";
	}
	echo "</select></div>";
}

function getPuertoZona($idzona){
	foreach ($NewGame->getPuertos() as $value) {
		if ($value->getZona() == $idzona) {
			
		}
	}
}
