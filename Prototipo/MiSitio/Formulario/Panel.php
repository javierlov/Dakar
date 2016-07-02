<?php

class Panel{
	
	var $panel_html, $sub_panel_html;
	var $pwidth, $pheight, $ptexto; 
	var $pclass, $pid;
	
	function __construct($texto, $class, $id){
						
		$this->sub_panel_html = '';
		
		if( trim($class) != '' ){
			$this->SetClass($class);
		}
		if( trim($id) != '' ){
			$this->SetID($id);
		}				
		if( trim($texto) != '' ){
			$this->SetTexto($texto);
		}		
	}
	
	private function SetAtributos(){
		$newitem = '<DIV ';
		if( trim($this->pclass) != '' ){
			$newitem .= " class=".$this->pclass;
		}
		if( trim($this->pid) != '' ){
			$newitem  .= " id=".$this->pid;
		}		
		if( trim($this->pwidth) != '' ){
			$newitem  .= " width=".$this->pwidth;
		}		
		if( trim($this->pheight) != '' ){
			$newitem  .= " height=".$this->pheight;
		}		
		
		$newitem  .= " > ";
		if( trim($this->ptexto) != '' ){
			$newitem  .= $this->ptexto;
		}
		
		//$newitem  .= '</DIV>';
		
		$this->AgregarItemArray($newitem);
	}
	
	public function SetTexto($value){
		$this->ptexto = $value;
	}
	public function SetClass($value){
		$this->pclass = $value;
	}
	public function SetID($value){
		$this->pid = $value;
	}
	public function SetWidth($value){
		$this->pwidth = $value;
	}
	public function SetHeight($value){
		$this->pheight = $value;
	}		
	
	private function AgregarItemArray($item){
		$this->panel_html = $item;		
	}
	
	public function AgregarSubPanel($panel){		
		$this->sub_panel_html .= $panel;
			
	}
	
	
	public function DibujarPanel(){			
		$this->SetAtributos();
		$result = $this->panel_html;
		$result .= $this->sub_panel_html;
		$result .= " </DIV>";
		return  $result;
	}
	
	public function test(){				
		echo " <prev>";
		print $this->DibujarPanel();
		echo " </prev>";
		
	}
}