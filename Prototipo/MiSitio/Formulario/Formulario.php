<?php

class Formulario
{
	var $ftabla;
	/*	
	var $ENDTABLE = '</TABLE>';
	var $INIROW = '<TD>';
	var $ENDROW = '</TD>';
	var $INICEL = '<TR>';
	var $ENDCEL = '</TR>';		
	*/
	
	function __construct($class, $id){		
		$newitem = "<TABLE id=$id class=$class width='100%' border=1>\n"; 
		$newitem .= "<TR><TD>1 </TD></TR>";
		$newitem .= "<TR><TD>1 </TD></TR>";
		$newitem .= "</TABLE>";
		
		$this->AgregarItemArray($newitem);		
		return true;	
	}
		
	public function NuevoRegistro($esprimerreg, $class, $id){
		$newitem  = '';
		if(!$esprimerreg){
			$newitem = '</TR>';
		}
		
		$newitem  .= '<TR';
		if( trim($class) != '' ){
			$newitem  .= " class=$class ";
		}
		if( trim($id) != '' ){
			$newitem  .= " id=$id ";
		}		
		//$newitem  .= " width='10 px'>";		
		//$newitem  .= '</TD>';
		
		$this->AgregarItemArray($newitem);	
	
	}
	
	public function NuevaCelda($texto, $class, $id){
		$newitem  = '<TD';
		if( trim($class) != '' ){
			$newitem  .= " class=$class ";
		}
		if( trim($id) != '' ){
			$newitem  .= " id=$id ";
		}		
		$newitem  .= ">";
		if( trim($texto) != '' ){
			$newitem  .= " $texto ";
		}
		
		$newitem  .= '</TD>';
		
		$this->AgregarItemArray($newitem);	
	
	}
	
	private function AgregarItemArray($item){
		if( isset($this->ftabla) ){
			array_push($this->ftabla, $item);
		}
		else{
			$this->ftabla = array($item);
		}
	}
	
	public function DibujarFormulario(){
		
		$result = "";
		foreach($this->ftabla as $item ){
			$result .= $item;
		}		
		$result .= " </TR></TABLE> ";
		return  $result;
	}
	
	public function test(){
		
		echo "<prev>";
		echo print_r($this->ftabla);
		echo "</prev>";
	}
	
}
