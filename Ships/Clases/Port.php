<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Funciones.php";

define("TIPOPUERTOCOMPRA", "COMPRA");//se puede comprar en este puerto
define("TIPOPUERTOVENTA", "VENTA");//se puede vender en este puerto
define("TIPOPUERTOCOMPRAVENTA", "COMPRAVENTA");

define("BODEGASACTIVAS", 3); //valor defaulta del parametro bodegasActivas

class Port {

	private $Pnombre;
	private $Pcapacidad; //cantidad de recursos total almacenados
	private $PbodegasActivas;//total disponibles de los recursos venta o compra
	private $PtipoPuerto; //el tipo de puerto permite realizar venta, compra o ambas
	private $PlistaRecurosVenta;//lista de recursos para vender
	private $PlistaRecurosCompra;//lista de recursos a comparar
	private $Pzona;//zona del mapa del puerto

	public function __construct($nombre, $capacidad, $zona, $tipoPuerto = TIPOPUERTOCOMPRA) {
		$this->Pnombre = $nombre;
		$this->Pcapacidad = $capacidad;
		$this->PtipoPuerto = $tipoPuerto;
		$this->Pzona = $zona;
		$this->PbodegasActivas = BODEGASACTIVAS;
	}
		
	public function ShowMe(){
		$result = "<br><h1>Puerto Detalles</h1>";	
		$result .= "<br> Nombre : ".$this->Pnombre;
		$result .= "<br> Capacidad : ".$this->Pcapacidad;
		
		if (isset($this->Pzona)) {
			$result .= "<br> zona : ".$this->Pzona->ShowMe();
		}
		
		if (isset($this->PlistaRecurosVenta)) {
			$result .= '<br> Recursos Venta :';
			foreach ($this->PlistaRecurosVenta as $value) {
				$result .= $value->ShowMe();		
			}		
		}	
		
		if (isset($this->PlistaRecurosCompra)) {
			$result .= '<br> Recursos Compra :';				
			foreach ($this->PlistaRecurosCompra as $value) {
				$result .= $value->ShowMe();		
			}		
		}	
		
		return $result;
	}
	
	public function getTipoPuerto() {
		return $this->PtipoPuerto;
	}
	
	public function getNombre() {
		return $this->Pnombre;
	}

	public function getCapacidad() {
		return $this ->Pcapacidad;
	}

	public function getBodegasActivas() {
		return $this ->PbodegasActivas;
	}

	public function getListaRecurosVenta() {
		return $this->PlistaRecurosVenta;
	}

	public function getListaRecurosCompra() {
		return $this->PlistaRecurosCompra;
	}

	public function getZona() {
		return $this->Pzona;
	}

	public function addRecurosVenta($value) {		
		$this->PlistaRecurosVenta[] = $value;				
	}
	
	public function addRecurosCompra($value) {
		$this->PlistaRecurosCompra[] = $value;
	}
	
	public function setZona($value) {
		$this->Pzona = $value;
	}

}
