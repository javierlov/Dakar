<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Controladores/SetPartida.php";
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Funciones.php";
 

function getMapaDetalle(){
	$NewGame = getGameSerialize();		
	$mapNombre = $NewGame->getGame()->getMap()->getNombre();
	echo "<p> mapa Nombre : ".$mapNombre ;	
	
	echo "<p> Zona Nombre : <table border='1'>";
	foreach ($NewGame->getGame()->getMap()->getZonas() as $value) {
			
		if ($value->getFila() == 0) {echo "<tr>";}
			
		echo "<td> ".$value->getNombre()." </td>";
		echo "<td> ".$value->getFila()." </td>";
		echo "<td> ".$value->getCol()." </td>";
		
		if ($value->getFila() == 3) {echo "</tr>";}	
	}
	echo "</table>";


	echo "<p> Puertos: <table border='1'>";
	echo "<tr>";			
	echo "<td> Nombre</td>";
	echo "<td> Tipo Puerto </td>";
	echo "<td> Capacidad </td>";
	echo "<td> Zona Nombre </td>";	
	echo "<td> Recursos venta </td>";
	echo "<td> Recursos compra </td>";
	echo "<td> Detalles</td>";
	echo "</tr>";	
	
	$id=0;
	foreach ($NewGame->getGame()->getMap()->getPuertos() as $value) {
			
		echo "<tr>";			
		echo "<td> ".$value->getNombre()." </td>";
		echo "<td> ".$value->getTipoPuerto()." </td>";
		echo "<td> ".$value->getCapacidad()." </td>";
		echo "<td> ".$value->getZona()->getNombre()." </td>";	
		echo "<td> ".count($value->getListaRecurosVenta())." </td>";
		echo "<td> ".count($value->getListaRecurosCompra())." </td>";
		echo "<td> ".AddBotonPuerto($id++)." </td>";
		echo "</tr>";	
	}
	echo "</table>";
	//setGameSerialize($NewGame);
}

function AddBotonPuerto($id){
	$result="<input type='button' name='DetallePuerto' id='DetallePuerto".$id."' value='Detalle Puerto' />";
	return $result;
}

function getDetallePuerto($idPuerto){
	$NewGame = getGameSerialize();		
	echo "<p>Detalle Puerto: ";
	if (is_numeric($idPuerto)) {
		$value=$NewGame->getGame()->getMap()->getPuerto($idPuerto);
		echo "  ".$value->getNombre()."  ";
		echo "<p> Capacidad: ".$value->getCapacidad()."  ";	
		echo "<p> Tipo Puerto: ".$value->getTipoPuerto()."  ";	
		echo "<p> Bodegas Activas: ".$value->getBodegasActivas()."  ";	
		echo "<p> Recuros Venta: ".count($value->getListaRecurosVenta())."  ";	
		if (count($value->getListaRecurosVenta()) > 0) {
			echo AddBotonDetalle("RecurosVenta", "0","Ver");
			$_SESSION["RecurosVenta"]=serialize($value->getListaRecurosVenta());
		}
		echo "<p> Recuros Compra: ".count($value->getListaRecurosCompra())."  ";	
		if (count($value->getListaRecurosCompra()) > 0) {
			echo AddBotonDetalle("RecurosCompra", "0","Ver");
			$_SESSION["RecurosCompra"]=serialize($value->getListaRecurosCompra());
		}
		echo "<p> Zona: ".$value->getZona()->getNombre()."  ";	
		echo "<p> Zona.Valor: ".$value->getZona()->getValor()."  ";	
		
	}else{
		echo "ERROR PUERTO ".$idPuerto;
	}
}

function AddBotonDetalle($name, $id, $value){
	$result="<input type='button' name='".$name."' id='".$name.$id."' value='".$value."' />";
	return $result;
}

function getDetalleRecurso($tipoRecurso){
	echo "<p>Detalle Recurso: ".$tipoRecurso;
	if (isset($_SESSION["RecurosVenta"])) {
		$Recursos = unserialize($_SESSION["RecurosVenta"]);		
		
			foreach ($Recursos as $value) {
				echo "<p>".$value->getNombre()."  ";	
				echo ". Estado:  ".$value->getEstado()."  ";
				echo ". Valor:  ".$value->getValor()."  ";
				echo ". Cantidad:  ".$value->getCantidad()."  ";
				
			}
	}
	else{
		echo "ERROR recurso ";
	}
}
