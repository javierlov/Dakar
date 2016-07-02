<?php
define("ZONAVALOR1", 1);
define("ZONAVALOR2", 2);
define("ZONAVALOR3", 3);

class Zone{

	private $Znombre;
	private $Zvalor; //es el costo de movimiento de la zona
	private $Zcol;//columna vertical, seccion grafica
	private $Zfila;//fila horizontal, seccion grafica
	
	public function __construct($nombre, $valor, $col=0, $fila=0) {
		$this->Znombre = $nombre;
		$this->Zvalor = $valor;
		$this->Zcol = $col;
		$this->Zfila = $fila;
	}

	public function ShowMe(){
		$result = "<div>Zona Detalles</div>";	
		$result .= "<label>".$this->Znombre."</label>";
		$result .= "<label>".$this->Zvalor."</label>";
									
		return $result;
	}
		
	public function getNombre() {
		return $this -> Znombre;
	}

	public function getValor() {
		return $this->Zvalor;
	}
	
	public function getCol() {
		return $this->Zcol;
	}
	
	public function getFila() {
		return $this->Zfila;
	}	
}
