<?php

class GrillaDatos{

	private $blocksPerPage = 10; 
	private $rowsPerPage = 10;
	private $Page = 1;
	private $arraydatos;
	private $code = "";
	private $tableStyle = "";
	private $titleStyle = "";
	
	private $FuncionAjaxFooter = "";
	
	public function __construct($blocksPerPage = 10, $rowsPerPage = 10, $FuncionAjaxFooter) {
	
		$this->blocksPerPage = $blocksPerPage;
		$this->rowsPerPage = $rowsPerPage;
		$this->FuncionAjaxFooter = $FuncionAjaxFooter;
		$this->arraydatos = array();
		
	}
	
	public function setDatos($value){
		$this->arraydatos = $value;
		//echo $this->DrawRowsJSArray();
	}
	
	public function setTableStyle($value){
		$this->tableStyle = $value;
	}
	
	public function setTitleStyle($value){
		$this->titleStyle = $value;
	}
	
	private function DrawFooter($pagina) {
		
		if(isset($pagina))
			$this->Page = $pagina;
			
		$this->code.= '<tr>';
		$this->code.= '<td colspan="3" >';
		
		$this->code.= '<table align="center" border="0" cellpadding="0" cellspacing="0" width="20%">';
		$this->code.= '<tr>';
				
		$bloque = ceil($this->getRegistros() / $this->rowsPerPage);
		
		for($i = 1; $i <= $bloque; $i++){
			if($pagina == $i){
				$this->code.= '<td align="center"><b>'.$i.'</b></td>';
			}else{
				//V1 $url = "http://localhost/struct/index.php?pagina=".$i;
				//V1 $this->code.= '<td align="center"><a class="GridFooterFont" href="'.$url.'"><b>'.$i.'</b></a></td>';
				$eventclick = 'onclick="'.$this->FuncionAjaxFooter.'('.$i.');"';
				$this->code.= '<td align="center" ><a href="#" '.$eventclick.'> <b>'.$i.'</b> </a>  </td>';
			}			
			$this->code.= '<td>&nbsp;&nbsp;</td>';
		}
		
		$this->code.= '</tr>';
		$this->code.= '</table>';
		$this->code.= '</td>';
		$this->code.= '</tr>';
	}
	
	private function DrawRowsJSArray(){
		$arrayjs = "<script type='text/javascript'> var arraydatos; ";
			
		foreach ($this->arraydatos as $rows) {
			if($rows[0])
				$arrayjs .= "var item = [true,".$rows[1].",".$rows[2]."]; ";
			else
				$arrayjs .= "var item = [false,".$rows[1].",".$rows[2]."]; ";
			$arrayjs .= "arraydatos.push(item); ";
		}
		
		return $arrayjs." </script>";
	}
	
	private function DrawRows($pagina){
		
		if(isset($pagina))
			$this->Page = $pagina;
		
		if(isset($_REQUEST["pagina"]))
			$this->Page = $_REQUEST["pagina"];
		
		$ultimoregistro = $this->rowsPerPage * $this->Page;
		if($this->Page == 1)
			$primerregistro = 1;
		else{
			$primerregistro = $ultimoregistro - $this->rowsPerPage;
			$primerregistro++;
		}
		
		$icont = 1;
		
		foreach ($this->arraydatos as $clave=>$rows) {
				if(($icont >= $primerregistro) and ($icont <= $ultimoregistro) ){
					$this->code.= '<tr>';
				
					$this->code.= '<td  align="center" ><b>'.$rows[2].'</b></td>';
					$this->code.= '<td  align="center" ><b>'.$rows[1].'</b></td>';
					
					$controlcheckbox = 'TYPE="checkbox" NAME="CHECK_'.$clave.'"  ID="ID_'.$clave.'"  ';
					if($rows[0]){
						$this->code.= '<td  align="center" >
							<INPUT '.$controlcheckbox.' CHECKED></td>';
					}else{
						$this->code.= '<td  align="center" >						
							<INPUT '.$controlcheckbox.' ></td>';
					}
								
					$this->code.= '</tr>';				
				}
				$icont++;
			}
	}
	
	public function ImprimirTabla($imprimir=false, $pagina = 1){
		
		$this->code = "";
		
		if($this->getRegistros() == 0){
			return "<div>No hay datos </div>";
		}else{
			$this->code.= '<div align="center" id="originalGrid" name="originalGrid" width="100%">
				<table border=1 class="'.$this->tableStyle.'"  width="80%">';
			
			$this->DrawRows($pagina);			
			$this->DrawFooter($pagina);
			
			$this->code.= '</table></div>';
			$this->code.= '<div id="divGridEspera">&nbsp;</div>';
			$this->code.= '<div id="divGridEsperaTexto">&nbsp;</div>';
		}
		
		if($imprimir){
			echo $this->code;
			return $this;
		}
		else
			return $this->code;
	}
	
	private function getRegistros(){
		return count($this->arraydatos);
	}

}
