<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Base.php");
define("VENTANA_DIV", "DIV");

class Ventana extends Base{
	private $name;
	private $style;
	private $codigo = '';
	private $ventana = '';
	private $clase = '';
	private $divID = '';
	private $divName = '';
	private $divValue = '';
	private $divClase = '';
	
	public function __construct($divID, $divName, $divValue, $divClase=''){
		$this->SetClass($divClase);
		$this->divID = $divID; 
		$this->divName = $divName; 
		$this->divValue = $divValue; 
		$this->divClase = $divClase; 
		
		return $this;
	}
	
	public function SetClass($clase){
		$this->clase = $clase;
		return $this;
	}
	
	public function SetStyle($style){
		$this->style = $style;
		return $this;
	}
	
	public function AddCodigo($code){
		$this->codigo[] = $code;
		return $this;
	}
	
	protected function SetTagNOVAMAS($divID, $divName, $divValue ){
		try{
			
			return $this;
			
		}catch (Exception $e) {
			return false;
			throw new Exception($e->getMessage());
		}
	}
	
	public function Dibujar(){
		$codigo = '';
		
		$codigo = "<".VENTANA_DIV; 
			
		if($this->clase)
			$codigo .= " class='".$this->clase."' "; 
			
		if($this->style)
			$codigo .= " style='".$this->style."' "; 
			
		$codigo .= " id='".$this->divID."' name='".$this->divName."' >";
		
		if(is_array($this->codigo))
			$codigo .= $this->RecorreArray($this->codigo);
		else
			$codigo .= $this->divValue;
			
		$codigo .= "</".VENTANA_DIV.">";
		
		return $codigo;
	}
	
}
