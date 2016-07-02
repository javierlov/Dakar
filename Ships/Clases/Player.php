<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/FuncionesJuego.php";

define("ACCIONCONTABLE7", 7);

class Player{

	private $Pnombre;
	private $Pmonto;
	private $Pbarco;
	private $PpuntosVictoria;
	private $PlistaAccionesContables;

	public function __construct($nombre, $montoinicial, $barco) {
		$this->Pnombre = $nombre;
		$this->Pbarco = $barco;
		$this->Pmonto = $montoinicial;
		$this->PpuntosVictoria = 0;
		$this->setAccionesContables();
	}
	
	public function ShowMe(){
		$result = "<br><h1>Jugador Detalles</h1>";	
		$result .= "<br> Nombre : ".$this->Pnombre;
		$result .= "<br> Monto : ".$this->Pmonto;
		
		if (isset($this->Pbarco)) {
			$result .= "<br> Barco : ".$this->Pbarco->ShowMe();
		}
				
		if (isset($this->PlistaAccionesContables)) {
			foreach ($this->PlistaAccionesContables as $value) {
				$result .= $value->ShowMe();	
			}
			
		}
		return $result;
	}
	
	private function setAccionesContables(){
		for ($i=0; $i < ACCIONCONTABLE7; $i++) {
			$GaccionCont = new AccionContable("Accion",ESTADOACCIONLIBRE, ($i*10)); 
			$this->PlistaAccionesContables[] = $GaccionCont;
		}		
	}
	
	public function getAccionesContables(){
		if (isset($this->PlistaAccionesContables)) 	
			return $this->PlistaAccionesContables;
		else{
			echo "sin acciones contables";
			return array();
		}			
	}

	public function getNombre() {
		return $this->Pnombre;
	}

	public function getBarco() {
		return $this->Pbarco;
	}

	public function setBarco($value) {
		$this->Pbarco=$value;
	}

	public function getMonto() {
		return $this->Pmonto;
	}
	
	public function getPuntosVictoria() {
		return $this->PpuntosVictoria;
	}
	
	public function setMonto($value){
		if(is_numeric($value)){
			$this->Pmonto += $value;
		}			
	}
	
	public function sePuntosVictoria($value){
		if(is_numeric($value)){
			$this->PpuntosVictoria += $value;
		}			
	}

}
