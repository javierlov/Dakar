<?php
class Jugador{
	private $parametros;
	private $nombre = '';
	
	public function __construct($nombre){
		
		$this->nombre = $nombre;
		
		$this->parametros['ejercitos'] = 1;
		$this->parametros['granjas'] = 2;
		$this->parametros['minas'] = 2;
		$this->parametros['laboratorios'] = 1;
		$this->parametros['templos'] = 0;
		$this->parametros['recursos'] = 20;
		$this->parametros['enespera'] = 1;
		$this->parametros['pobladores'] = 19;
		
		$this->parametros['accionesCiviles'] = 4;
		$this->parametros['accionesMilitares'] = 2;
	
		$this->parametros['ActualForaleza'] = 0;
		$this->parametros['ActualTecnologia	'] = 0;
		$this->parametros['ActualCultura'] = 0;
	
		$this->parametros['TotForaleza'] = 0;
		$this->parametros['TotTecnologia'] = 0;
		$this->parametros['TotCultura'] = 0;
		
		return $this;
	}
	
	public function GetNombre(){return $this->nombre;	}
	
	public function SetParametro($nombre, $valor){$this->parametros[$nombre] += $valor; return $this;}
	public function GetParametro($nombre){return $this->parametros[$nombre];	}
	
}
