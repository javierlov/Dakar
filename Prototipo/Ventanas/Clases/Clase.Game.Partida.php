<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Base.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Game.Jugador.php");

class Partida{
	private $Jugadores = null;
	private $nombre = '';
	private $turnoActual = '';
	private $ListaTurnos = null;
	
	public function __construct($nombre){
		$this->nombre = $nombre;	
		$this->turnoActual = 0;	
		return $this;
	}
	
	public function AgregarJugador($jugador){	
		$this->Jugadores[] = $jugador;	
	}
	
	public function GetJugadorTurnoActual(){
		return $this->Jugadores[$this->turnoActual];
	}
	
	public function GetNombre(){return $this->nombre;}
	
	public function SetParametro($nombre, $valor){$this->parametros[$nombre] += $valor; return $this;}
	public function GetParametro($nombre){return $this->parametros[$nombre];	}
	
}
