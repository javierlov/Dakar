<?php
require_once $_SERVER['DOCUMENT_ROOT']."\ships\Funciones.php";
//spl_autoload_register('mi_autocargador');

class Game{

	private $Gnombre;
	private $Gmap;
	
	private $GlistaTurnos;
	private $GlistaGamers;
	private $GlistaRecurosJuego;
	
	private $GturnoActual;

	public function __construct($nombre) {
		$this->Gnombre = $nombre;
		$this->Gmap = new Map($nombre);
		$this->GturnoActual = 0;
	}
	
	public function ShowMe(){
		$result = "<br><p>Juego Detalles</p>";	
		$result .= "<br> Nombre : ".$this->Gnombre;
		$result .= "<br> Turno Actual : ".$this->GturnoActual;
		
		if (isset($this->Gmap)) {
			$result .= "<br> Monto : ".$this->Gmap->ShowMe();
		}
		
		if (isset($this->GlistaRecurosJuego)) {
			foreach ($this->GlistaRecurosJuego as $value) {
				$result .= $value->ShowMe();		
			}		
		}
				
		if (isset($this->GlistaGamers)) {
			foreach ($this->GlistaGamers as $key => $value) {
				$result .= "<br> Jugadores : ".$key." >> ".$value;		
			}		
		}	

		if (isset($this->GlistaTurnos)) {
			$result .= "<br><p> Turnos hoy: ";
			foreach ($this->GlistaTurnos as $value) {
				$result .= "<br> Turno : ".$value;	
			}		
		}	
				
		return $result;
	}
	
	public function getListaRecurosJuego() {
		return $this->GlistaRecurosJuego;
	}
	
	public function addRecurosJuego($value, $cantidad) {
		for ($i=0; $i < $cantidad; $i++) {	
			$this->GlistaRecurosJuego[] = $value;	
		}				
	}	

	public function getNombre() {
		return $this->Gnombre;
	}

	public function getMap() {
		return $this->Gmap;
	}

	public function getTurnos() {
		return $this->GlistaTurnos;
	}

	public function getJugadores() {
		return $this->GlistaGamers;
	}

	public function setJugadores($value) {
		$this->GlistaGamers[]=$value;
	}

	public function getJugadorTurno() {
		if (!$this->EsTurnoValido()) {
			return "Finalizo ultimo turno";
		}	
		
		$turnoName = $this->getTurnoName();
		
		if (isset($this->GlistaGamers)) {
			foreach ($this->GlistaGamers as $value) {
				if ($turnoName == $value->getNombre()) {
					return $value;	
				}						
			}		
		}		
		else {
			$result = array();
		}
		return $result;
	}

	public function getTurnoActual() {
		return $this->GturnoActual;
	}
	
	public function getUltimoTurno(){
		return count($this->GlistaTurnos);
	}
	
	private function EsTurnoValido(){
		//echo "<p>".$this->getUltimoTurno()."> ".$this->getTurnoActual()."<p>";
		if ($this->getUltimoTurno() > $this->getTurnoActual()) {
			return TRUE;
		}	
		return FALSE;
	}
	
	public function addTurno($value) {		
		$this->GlistaTurnos[] = $value->getNombre();				
	}
	
	public function getTurnoName() {
		$turno = $this->getTurnoActual();		
		
		if(!$this->EsTurnoValido())
		{
			$result = "<p> $turno <p> ".var_dump($this->GlistaTurnos);
			$result .= "<p> funcion: ()".__FUNCTION__."). ultimo turno superado";
			return $result; 
		}
				
		$turnoName = $this->GlistaTurnos[$turno];
		return $turnoName;				
	}

	public function setTurnoActual($value) {		
		$this->GturnoActual = $value;				
	}
	
}
