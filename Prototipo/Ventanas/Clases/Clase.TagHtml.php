<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Base.php");

class TagHtml extends Base{
	private $name;
	private $style;
	private $codigo = '';
	private $taghtml = '';
	private $clase = '';
	private $tagID = '';
	private $tagName = '';
	private $tagValue = '';
	private $tagClase = '';
	private $ArrayTagsHTML = array("span","b","p","a","h1","h2","h3","h4","DIV");
	
	public function __construct($tagHTML, $tagID, $tagName, $tagValue='', $tagClase='', $tagStyle=''){
		$this->SetClass($tagClase);
		$this->tagID = $tagID; 
		$this->tagName = $tagName; 
		$this->tagValue = $tagValue; 
		$this->tagClase = $tagClase; 
		$this->style = $tagStyle; 
		
		if($this->BuscarValorEnArray($this->ArrayTagsHTML, $tagHTML))
			$this->taghtml = $tagHTML; 
		else
			$this->taghtml = "span"; 
		
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
	
	
	public function Dibujar(){
		$codigo = '';
		
		$codigo = "<".$this->taghtml; 
			
		if($this->clase)
			$codigo .= " class='".$this->clase."' "; 
			
		if($this->style)
			$codigo .= " style='".$this->style."' "; 
			
		$codigo .= " id='".$this->tagID."' name='".$this->tagName."' >";
		
		if(is_array($this->codigo))
			$codigo .= $this->RecorreArray($this->codigo);
		else
			$codigo .= $this->tagValue;
			
		$codigo .= "</".$this->taghtml.">";
		
		return $codigo;
	}
	
}
