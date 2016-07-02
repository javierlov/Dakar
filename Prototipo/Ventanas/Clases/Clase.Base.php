<?php
class Base {
	
	public function __construct(){
		
	}
	
	protected function TagsHTML($tagNombre, $cerrado=false){
		if($cerrado)
			return '</'.$tagNombre.'>';
		else
			return '<'.$tagNombre.'>';
			
	}
	
	protected function TagAbreCierra($tagNombre){
		return '<'.$tagNombre.'/>';
	}
	
	protected function RecorreArray($array){
		$arrayResultado = '';
		
		if(!isset($array)) return '';
		
		foreach($array as $key => $value)
			$arrayResultado .= $value;
		
		return $arrayResultado;
	}
	
	protected function BuscarValorEnArray($array, $valor){
		
		if(!isset($array)) return false;
		if(!is_array($array)) return false;
		
		foreach($array as $key => $value){
			if($this->Mayusculas($value) == $this->Mayusculas($valor)){
				return true;
			}
		}
		
		return false;
	}
	
	protected function Mayusculas($valor){
		return strtoupper(trim($valor));
	}
	
}
