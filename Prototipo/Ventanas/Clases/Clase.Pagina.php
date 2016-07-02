<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Base.php");

define("PAGINA_HTML", "HTML");
define("PAGINA_BODY", "BODY");
define("PAGINA_HEAD", "HEAD");
define("PAGINA_TITLE", "TITLE");

class Pagina extends Base{
	var $meta;
	var $title='';
	var $css;
	var $js;
	var $codigo;
	
	public function __construct($title){
		$this->title = $this->TagsHTML(PAGINA_TITLE);;
		$this->title .= $title;
		$this->title .= $this->TagsHTML(PAGINA_TITLE, true);;
	}
	
	public function AddMeta($name, $content){
		$this->meta[] = "<meta name=".$name." content=".$content."> ";
	}
	
	public function AddCSS($href){
		$this->css[] = "<link rel='stylesheet' href='".$href."' type='text/css' />  ";
	}
	
	private function AddJS($src){
		$this->js[] = "<script src='".$src."' type='text/javascript'></script> ";
	}
	
	public function AddCodigo($codigo){
		$this->codigo[] = $codigo;
	}
		
	public function Dibujar(){
		$pagina = $this->TagsHTML(PAGINA_HTML);
		
		$pagina .= $this->TagsHTML(PAGINA_HEAD);
		
		$pagina .= $this->RecorreArray($this->meta);
		$pagina .= $this->title;
		$pagina .= $this->RecorreArray($this->css);
		$pagina .= $this->RecorreArray($this->js);
		
		$pagina .= $this->TagsHTML(PAGINA_HEAD, true);
		
		$pagina .= $this->TagsHTML(PAGINA_BODY);
		
		$pagina .= $this->RecorreArray($this->codigo);
		
		$pagina .= $this->TagsHTML(PAGINA_BODY, true);
		$pagina .= $this->TagsHTML(PAGINA_HTML, true);
		return $pagina;
	}
}
