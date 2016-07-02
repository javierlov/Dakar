<?php
define("ESTADOACTIVO", "ACTIVO");
define("ESTADOVENTA", "VENTA");
define("ESTADOCOMPRA", "CAMPRA");
define("ESTADOINACTIVO", "INACTIVO");

class Recurso{

	private $Rnombre;
	private $Rvalor;//Costo en oro del recurso
	private $Rcantidad;//cantidad de recursos ver como usar
	private $Restado;//el estado del recurso, estdo de venta

	public function __construct($nombre, $valor, $cantidad, $estado = ESTADOACTIVO) {
		$this->Rnombre = $nombre;
		$this->Rvalor = $valor;
		$this->Rcantidad = $cantidad;
		$this->Restado = $estado;
	}
	
	
	public function ShowMe(){
		$result = "<br><h1>Recurso Detalles</h1>";	
		$result .= "<br> Nombre : ".$this->Rnombre;
		$result .= "<br> Valor : ".$this->Rvalor;
		$result .= "<br> Cantidad : ".$this->Rcantidad;
		
		return $result;
	}
	
	public function getEstado() {
		return $this->Restado;
	}
	
	public function setNombre($estado) {
		$this->Restado = $estado;
	}
	
	
	public function getNombre() {
		return $this->Rnombre;
	}

	public function getValor() {
		return $this->Rvalor;
	}

	public function getCantidad() {
		return $this->Rcantidad;
	}

}
