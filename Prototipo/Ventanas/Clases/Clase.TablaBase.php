<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Ventana.php");

class TablaBase extends Ventana{
	private $filas;
	private $columnas;
	private $listaItems ='';
	
	public function __construct($filas, $columnas){
		$this->filas = $filas;
		$this->columnas = $columnas;
		return $this;
	}
	
	public function AddTablaEnFila($NumFila, $NumColumna, $tabla){
		$this->listaItems[$NumFila][$NumColumna] = $tabla;
	}
	
	public function Dibujar(){
		$codigo = '';
		
		$tabla = new Ventana("ventanaMain", "ventanaMain", "ventanaMain", "contenedorTable");

		for($i = 0;$i < $this->filas; $i++){
			$fila = new Ventana("filaID".$i, "filaNAME".$i, "filaTEXTO".$i, "contenedorFila");

			for($x = 0;$x < $this->columnas; $x++){
				$texto = "fila ".$i." columna ".$x;
				$columna = new Ventana("columnaID".$x, "columnaNAME".$x, $texto, "contenedorColumn");
				
				$ifila = $i+1;
				$xColumn = $x+1;
				if(isset($this->listaItems[$ifila][$xColumn])){
					$tablanueva = $this->listaItems[$ifila][$xColumn];
					$columna->AddCodigo($tablanueva->Dibujar() );
				}
				
				$fila->AddCodigo($columna->Dibujar() );
			}
			
			$tabla->AddCodigo($fila->Dibujar() );
		}
		
		$codigo = $tabla->Dibujar();
		return $codigo;
	}
	
}
