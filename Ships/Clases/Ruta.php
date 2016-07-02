<?php

class Ruta{

	private $Rnombre;
	private $Rzona;
	private $Rcosto;

	public function __construct($nombre, $zona) {
		$this->Rnombre = $nombre;
		$this->Rzona = $zona;
	}

	public function getNombre() {
		return $this->Rnombre;
	}

	public function getZona() {
		return $this->Rzona;
	}

	public function getCosto() {
		return $this->Rcosto;
	}
	
	public function setCosto($value){
		$this->Rcosto = $value;
	}

}
