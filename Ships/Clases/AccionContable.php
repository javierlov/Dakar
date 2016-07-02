<?php
define("ESTADOACCIONLIBRE", "LIBRE");
define("ESTADOACCIONVENDIDA", "VENDIDA");

class AccionContable{

	private $Anombre;
	private $Aestado;
	private $Avalor;
	
	public function __construct($nombre, $estado, $valor) {
		$this->Anombre = $nombre;
		$this->Aestado = $estado;
		$this->Avalor = $valor;
	}
	
		
	public function ShowMe(){	
		$result = "<br><h1>Accion Contable Detalles</h1>";	
		$result .= "<br> Nombre : ".$this->Anombre;
		$result .= "<br> Estado : ".$this->Aestado;
		$result .= "<br> Valor : ".$this->Avalor;
		
		return $result;
	}

	public function getNombre() {
		return $this->Anombre;
	}

	public function getEstado() {
		return $this->Aestado;
	}

	public function getValor() {
		return $this->Avalor;
	}

}
