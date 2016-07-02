<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Funciones.php";

define("PRENAMEMAP", "MAPA_");

class Map{

	private $Mnombre;
	private $MlistaPuertos;
	private $MListaZonas;

	public function __construct($nombre) {
		$this->Rnombre = PRENAMEMAP.$nombre;
	}
	
	public function ShowMe(){
		$result = "<br><h1>Mapa Detalles</h1>";	
		$result .= "<br> Nombre : ".$this->Mnombre;
				
		if (isset($this->MlistaPuertos)) {
			foreach ($this->MlistaPuertos as $value) {
				$result .= $value->ShowMe();		
			}		
		}
		
		if (isset($this->MListaZonas)) {
			foreach ($this->MListaZonas as $value) {
				$result .= $value->ShowMe();		
			}		
		}							
		return $result;
	}
		
	
	public function AddZona($value){
		$this->MListaZonas[] = $value;
	}
	
	public function AddPuerto($value){
		$this->MlistaPuertos[] = $value;
	}
	
	public function getZona($id) {
		return $this->MListaZonas[$id];
	}	

	public function getZonas() {
		return $this->MListaZonas;
	}
	
	public function getNombre() {
		return $this->Mnombre;
	}

	public function getPuerto($id) {
		if((isset($this->MlistaPuertos[$id])) 
		and (is_numeric($id)))
			return $this->MlistaPuertos[$id];		
	}
	
	public function getPuertos() {
		return $this->MlistaPuertos;
	}
	
	public function countPuertos(){
		if (isset($this->MlistaPuertos)) {
			return count($this->MlistaPuertos);
		}
		return 0;
	}

	public function countZonas(){
		if (isset($this->MListaZonas)) {
			return count($this->MListaZonas);	
		}
		return 0;
	}
	
}
