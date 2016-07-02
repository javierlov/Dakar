<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Controladores/NewGame.php";

session_start();

function NuevaPartida($nombrepartida){
	
	$game = new NewGame($nombrepartida);
	$_SESSION["PARTIDA"] = $game;
		
}

function NuevoJugador($juagador){
	
	$game = $_SESSION["PARTIDA"];	
	$game->NewPlayer($jugador);	
	$_SESSION["PARTIDA"] = $game;
	
} 

function CrearMapa($mapa){
	
	$game = $_SESSION["PARTIDA"];	
	$game->setMap($mapa);	
	$_SESSION["PARTIDA"] = $game;

}

function IniciarPartida($mapa){
	
	$game = $_SESSION["PARTIDA"];	
	$game->setMap($mapa);	
	$_SESSION["PARTIDA"] = $game;

}

function IniciarJuego(){
	
	$game = $_SESSION["PARTIDA"];
	// $newgame 
	$game->setGame();	
	$_SESSION["PARTIDA"] = $game;
	
}


 
