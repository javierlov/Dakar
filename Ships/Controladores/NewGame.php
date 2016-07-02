<?php
require_once $_SERVER['DOCUMENT_ROOT']."\ships\Funciones.php";

define("CAPACIDAD5", 5);

class NewGame{
		
	private $NGnombre;	
	private $NGgame;

	public function __construct($nombre) {
		$this->NGnombre = $nombre;		
		$this->NGgame = new Game($nombre);
		
		$this->AddPuertos();
		$this->setRecursoPuerto();
	}
	
	public function ShowMe(){
		$result = "<br><h1>Nuevo  Juego  Detalles</h1>";	
		$result .= "<br> Nombre : ".$this->NGnombre;
		
		/*
		if(isset($this->NGgame)){
			$result .= $this->NGgame->ShowMe();
		}
		
		if(isset($this->NGlistaPlayers)){
			echo "<br>Lista jugadores";	
			foreach ($this->NGlistaPlayers as $value) {
				$result .= 	$value->ShowMe();
			}
		}		 
		 */
		
		foreach ($this->NGmap->getPuertos() as $value) {
			$result .= 	$value->ShowMe();
		}
									
		return $result;

	}
	
	public function setRecursoPuerto(){
		//Agrega todos los recurosos	
		$this->AddRecursos();
		//Reparto random de recursos
		$recursosreparto = $this->NGgame->getListaRecurosJuego();
		shuffle( $recursosreparto );

		$cont = 0;
		$contVenta = 0;
		$cantidad = count($this->NGgame->getMap()->getPuertos() ) -1;
	
		foreach ($recursosreparto  as $recurso) {
				
			if ($cont > $cantidad) {$cont = 0;}	
			if ($contVenta > $cantidad) {$contVenta = 0;}
			
			
			for ($i=$cont; $i <= $cantidad; $i++) {
				$puerto = $this->NGgame->getMap()->getPuerto($i);
				
				//echo "  puerto  ".$puerto->getNombre();
				//echo " (cantidad ".$cantidad." cont ".$cont.")  "; 
				//echo "<br> puerto  ".$puerto->getNombre()." ".$recurso->getNombre()." tipo ".$puerto->getTipoPuerto() ;
				$cont++;
				
				if($puerto->getTipoPuerto() != TIPOPUERTOCOMPRA)
				{
					//echo " OK ".$puerto->getNombre();
				 	$puerto->addRecurosVenta($recurso);				
					break;	
				}				
			}
			
			for ($i=$contVenta; $i <= $cantidad; $i++) {
				$puerto = $this->NGgame->getMap()->getPuerto($i);
				$contVenta++;
				
				if($puerto->getTipoPuerto() == TIPOPUERTOCOMPRA)
				{
				 	$puerto->addRecurosCompra($recurso);				
					break;	
				}				
			}
									
		}
							
	}
	
	public function getPuertoRecursos(){
		$resulta = 'valores';	
		foreach ($this->NGgame->getMap()->getPuertos() as $value) {
			$resulta .= "<p>recurso : ".$value->getNombre()." total venta ".count($value->getListaRecurosVenta());
		}
		return $resulta;
	}
	
	public function getGame(){
		return $this->NGgame;
	}

	public function getZonas(){
		return $this->NGgame->getMap()->getZonas();
	}
	
	private function AddZonas(){
		//constructor $nombre, $valor, $col=0, $fila=0
		$vcol = 0;	$vfil = 0;		
		$zona = new Zone("EUR1",ZONAVALOR2, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);		
		
		$zona = new Zone("EUR2",ZONAVALOR1, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("EUR3",ZONAVALOR2, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("EUR4",ZONAVALOR3, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		
		$vcol++;	$vfil = 0;
		$zona = new Zone("MARE1",ZONAVALOR2, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("MARE2",ZONAVALOR1, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("MARE3",ZONAVALOR2, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("MARE4",ZONAVALOR3, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		
		$vcol++;	$vfil = 0;
		$zona = new Zone("MARA1",ZONAVALOR2, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("MARA2",ZONAVALOR1, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("MARA3",ZONAVALOR2, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("MARA4",ZONAVALOR3, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		
		$vcol++;	$vfil = 0;
		$zona = new Zone("AMER1",ZONAVALOR2, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("AMER2",ZONAVALOR1, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("AMER3",ZONAVALOR2, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
		$zona = new Zone("AMER4",ZONAVALOR3, $vcol, $vfil++);
		$this->NGgame->getMap()->AddZona($zona);
			
	}

	public function getPuertos(){
		return $this->NGgame->getMap()->getPuertos();
	}
	
	private function AddPuertos(){
			
		$this->AddZonas();
		
		$puerto = new Port("Oslo", CAPACIDAD5, $this->NGgame->getMap()->getZona(0), TIPOPUERTOCOMPRA);
		$this->NGgame->getMap()->AddPuerto($puerto);		
		
		$puerto = new Port("Londres", CAPACIDAD5, $this->NGgame->getMap()->getZona(1), TIPOPUERTOCOMPRA);
		$this->NGgame->getMap()->AddPuerto($puerto);		
		
		$puerto = new Port("Paris", CAPACIDAD5, $this->NGgame->getMap()->getZona(2), TIPOPUERTOCOMPRA);
		$this->NGgame->getMap()->AddPuerto($puerto);		
		
		$puerto = new Port("Lisboa", CAPACIDAD5, $this->NGgame->getMap()->getZona(3), TIPOPUERTOCOMPRA);
		$this->NGgame->getMap()->AddPuerto($puerto);
		
		$puerto = new Port("Nueva York", CAPACIDAD5, $this->NGgame->getMap()->getZona(12), TIPOPUERTOCOMPRAVENTA);
		$this->NGgame->getMap()->AddPuerto($puerto);		
		
		$puerto = new Port("Houston", CAPACIDAD5, $this->NGgame->getMap()->getZona(13), TIPOPUERTOCOMPRAVENTA);
		$this->NGgame->getMap()->AddPuerto($puerto);		
		
		$puerto = new Port("La Habana", CAPACIDAD5, $this->NGgame->getMap()->getZona(14), TIPOPUERTOCOMPRAVENTA);
		$this->NGgame->getMap()->AddPuerto($puerto);		
		
		$puerto = new Port("Buenos Aires", CAPACIDAD5, $this->NGgame->getMap()->getZona(15), TIPOPUERTOCOMPRAVENTA);
		$this->NGgame->getMap()->AddPuerto($puerto);		
				
	}
	
	private function AddRecursos(){
		//$nombre, $valor, $cantidad, $estado = ESTADOACTIVO
		$recurso = new Recurso("Azucar", 10, 4);
		$this->NGgame->addRecurosJuego($recurso,4);
		
		$recurso = new Recurso("Yerba", 10, 4);
		$this->NGgame->addRecurosJuego($recurso,4);
		
		$recurso = new Recurso("Trigo", 10, 4);
		$this->NGgame->addRecurosJuego($recurso,4);
		
		$recurso = new Recurso("Maiz", 10, 4);
		$this->NGgame->addRecurosJuego($recurso,4);
		
		$recurso = new Recurso("Polvora", 20, 4);
		$this->NGgame->addRecurosJuego($recurso,3);
		
		$recurso = new Recurso("Algodon", 20, 4);
		$this->NGgame->addRecurosJuego($recurso,3);
		
		$recurso = new Recurso("Oro", 50, 4);
		$this->NGgame->addRecurosJuego($recurso,2);
		
		$recurso = new Recurso("Diamantes", 50, 4);
		$this->NGgame->addRecurosJuego($recurso,2);
	}
	
	public function NewPlayer($jugador) {
		$this->NGgame->setJugadores($jugador);
	}
	
	
	public function GenerarTurnos(){
		
		for ($i=0; $i < 3; $i++) { 
			foreach ($this->NGlistaPlayers as $jugador) {
				$this->NGgame->addTurno($jugador);
			}
		}
	}
	
}
