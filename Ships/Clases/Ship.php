<?php

define("SUBFIJOBARCO", "Barco_");
define("CAPACIDADBARCO5", 5);
define("VALORBARCOORO", 100);
define("MOVIMIENTOSBARCO", 10);

class Ship {

	private $Snombre;
	private $Scapacidad; //valor relacionado con carga
	private $Scarga; //array con los recursos actuales max 5
	
	private $SposicionZona; //ubicacion en zona del mundo(ver zonas del mapa)
	private $SposicionPuerto; //ubicacion en puerto del mundo(ver puertos del mapa)
	
	private $Svalor; //representa el valor en oros de la nave 
	private $PlistaCompras; //array de todos los recursos comprados
	private $PlistaVentas; //array de todos los recursos vendidos
	private $SmovimientosMax; //cantidad maxima de movimientos inicial

	public function __construct($nombre, $zona, $puerto) {
		$this->Snombre = SUBFIJOBARCO.$nombre;
		$this->Scapacidad = CAPACIDADBARCO5;
		$this->Scarga = 0;
		
		$this->SposicionZona =  $zona;
		$this->SposicionPuerto =  $puerto;
		
		$this->Svalor = VALORBARCOORO;
		$this->SmovimientosMax = MOVIMIENTOSBARCO;
	}
	
	public function ShowMe(){
		$result = "<br><h1>Barco Detalles</h1>";	
		$result .= "<br> Nombre : ".$this->Snombre;
		$result .= "<br> Capacidad : ".$this->Scapacidad;
		$result .= "<br> Carga : ".$this->Scarga;
		$result .= "<br> Posicion.Zona : ".$this->SposicionZona->getNombre();
		$result .= "<br> Posicion.Puerto : ".$this->SposicionPuerto->getNombre();
		$result .= "<br> valor : ".$this->Svalor;
		if (isset($this->PlistaCompras)) {
			foreach ($this->PlistaCompras as $key => $value) {
				$result .= "<br> Compra : ".$key." >> ".$value;		
			}		
		}	
		
		if (isset($this->PlistaVentas)) {
			foreach ($this->PlistaVentas as $key => $value) {
				$result .= "<br> Ventas : ".$key." >> ".$value;		
			}
		}
				
		return $result;
		
	}

	public function getNombre() {
		return $this -> Snombre;
	}

	public function getCapacidad() {
		return $this -> Scapacidad;
	}

	public function getCarga() {
		return $this -> Scarga;
	}

	public function getPosicion() {
		return $this->SposicionZona->getNombre()." ".$this->SposicionPuerto->getNombre();
	}

	public function getPosicionPuerto() {
		return $this->SposicionPuerto;
	}

	public function getPosicionZona() {
		return $this->SposicionZona;
	}

	public function getValor() {
		return $this -> Svalor;
	}

	public function setCarga($value) {
		$this -> Scarga = $value;
	}
	
	public function setPosicionZona($value) {
		$this->SposicionZona = $value;
	}
	
	public function setPosicionPuerto($value) {
		$this->SposicionPuerto = $value;
	}
	
	public function setValor($value) {
		$this->Svalor += $value;
	}
	
	public function getCompras() {
		if (isset($this->PlistaCompras)) 
			return $this->PlistaCompras;
		else 
			return "sin compras";
	}

	public function getVentas() {
		if (isset($this->PlistaVentas)) 
			return $this->PlistaVentas;
		else 
			return "sin ventas";
	}
	
	public function getMovimietos()
	{
		$countcarga = count($this->Scarga);	
		return ($this->SmovimientosMax - $countcarga);
	}

}
