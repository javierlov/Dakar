<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ships/Controladores/SetPartida.php";

function __autoload($clase) {	
	//echo $_SERVER['DOCUMENT_ROOT']."/ships/Clases/".$clase.'.php';
    require_once $_SERVER['DOCUMENT_ROOT']."/ships/Clases/".$clase.'.php';
}
 
 //spl_autoload_register('mi_autocargador');
 
function mi_autocargador($clase) {
	echo $_SERVER['DOCUMENT_ROOT']."/ships/Clases/".$clase.'.php';
    include_once $_SERVER['DOCUMENT_ROOT']."/ships/Clases/".$clase.'.php';
}

function Cabeceras(){
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT"); // always modified
	header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
	header("Cache-Control: post-check=0, pre-check=0", false); // HTTP/1.1
	header("Pragma: no-cache"); // HTTP/1.0
	//session_start();
}


function getGameSerialize(){
	if ($_SESSION["NewGame"]) {
		$NewGame = unserialize($_SESSION["NewGame"]);
	}
	else {
		echo "<p> Error no existe newgame";
	}
	
	return $NewGame;
}

function setGameSerialize($value){
	$_SESSION["NewGame"] = serialize($value);
}
