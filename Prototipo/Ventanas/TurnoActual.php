<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Pagina.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Ventana.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.TagHtml.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.TablaBase.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Game.Partida.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Ventanas/Clases/Clase.Game.Jugador.php");

$nuevaPartida = new Partida('partida');

$Jug1 = new Jugador('ROBOT1');
$Jug2 = new Jugador('ROBOT2');
$Jug3 = new Jugador('ROBOT3');

//-----------------------------------------------------------
//creo un nuevo objeto pagina
$pag = new Pagina("TITULO PAGINA");

//agrego una hoja css al proyecto
//C:\xampp\htdocs\Ventanas\Css\Ventanas.css
$pag->AddCSS("Css/Ventanas.css");

//-----------------------------------------------------------
//creo un nuevo objeto ventana
$styleRed = "padding:0px; margin:10px; background-color:red; color:black;";
$styleAmarillo = "padding:0px; margin:10px; background-color:yellow; color:black;";

$divCubosRojosE= new TagHtml("div", "divid1", "divname1","Ejercitos", "cubos", $styleRed." width:80%; padding:3px;");
$divCubosRojos1= new TagHtml("div", "divid1", "divname1","1", "cubos", $styleRed);	

$divCubosRojosG= new TagHtml("div", "divid1", "divname1","Granjas", "cubos", $styleAmarillo	." width:80%; padding:3px;");
$divCubosAmari= new TagHtml("div", "divid1", "divname1","1", "cubos", $styleAmarillo);

$divEjercitos = new TagHtml("div", "divid1", "divname1","Ejercitos", "TarjetaPrint");
$divEjercitos->AddCodigo($divCubosRojosE->Dibujar()); 
$divEjercitos->AddCodigo($divCubosRojos1->Dibujar()); 
$divEjercitos->AddCodigo($divCubosRojos1->Dibujar()); 
$divEjercitos->AddCodigo($divCubosRojos1->Dibujar()); 

$divGranjas = new TagHtml("div", "divid1", "divname1","Granjas", "TarjetaPrint");
$divGranjas->AddCodigo($divCubosRojosG->Dibujar()); 
$divGranjas->AddCodigo($divCubosAmari->Dibujar()); 

$divMinas = new TagHtml("div", "divid1", "divname1","Minas", "TarjetaPrint");
$divLaboratorios = new TagHtml("div", "divid1", "divname1","Laboratorios", "TarjetaPrint");
$divTemplos = new TagHtml("div", "divid1", "divname1","Templos", "TarjetaPrint");

$tbase1 = new TablaBase(1,5);
$tbase1->AddTablaEnFila(1 ,1 ,$divEjercitos);
$tbase1->AddTablaEnFila(1 ,2 ,$divGranjas);
$tbase1->AddTablaEnFila(1 ,3 ,$divMinas);
$tbase1->AddTablaEnFila(1 ,4 ,$divLaboratorios);
$tbase1->AddTablaEnFila(1 ,5 ,$divTemplos);

$div2Azules = new TagHtml("div", "divid1", "divname1","Azules", "titlePrint");
$div2Azules->SetStyle("float:left; width:900px;");
$div2EnEspera = new TagHtml("div", "divid1", "divname1","EnEspera", "TarjetaPrint");
$div2EnEspera->SetStyle("text-align:top; float:right; width:280px; height:auto;");

$tbase2 = new TablaBase(1,2);
$tbase2->AddTablaEnFila(1 ,1 ,$div2Azules);
$tbase2->AddTablaEnFila(1 ,2 ,$div2EnEspera);

$div3Amarillos = new TagHtml("div", "divid1", "divname1","Amarillos", "titlePrint");
$div3BcoRojo = new TagHtml("div", "divid1", "divname1","BcoRojo", "titlePrint");
//$div3Amarillos->SetStyle("float:right; width:100px; height:100%;");

$tbase3 = new TablaBase(1,2);
$tbase3->AddTablaEnFila(1 ,1 ,$div3Amarillos);
$tbase3->AddTablaEnFila(1 ,2 ,$div3BcoRojo);


$div4Fortaleza = new TagHtml("div", "divid1", "divname1","Fortaleza", "titlePrint");
$div4Tecnologia = new TagHtml("div", "divid1", "divname1","Tecnologia", "titlePrint");
$div4Cultura = new TagHtml("div", "divid1", "divname1","Cultura", "titlePrint");
$tbase4	= new TablaBase(1,3);
$tbase4->AddTablaEnFila(1 ,1 ,$div4Fortaleza);
$tbase4->AddTablaEnFila(1 ,2 ,$div4Tecnologia);
$tbase4->AddTablaEnFila(1 ,3 ,$div4Cultura);

$div5Fortaleza = new TagHtml("div", "divid1", "divname1","Total Fortaleza", "titlePrint");
$div5Tecnologia = new TagHtml("div", "divid1", "divname1","Total Tecnologia", "titlePrint");
$div5Cultura = new TagHtml("div", "divid1", "divname1","Total Cultura", "titlePrint");
$tbase5	= new TablaBase(1,3);
$tbase5->AddTablaEnFila(1 ,1 ,$div5Fortaleza);
$tbase5->AddTablaEnFila(1 ,2 ,$div5Tecnologia);
$tbase5->AddTablaEnFila(1 ,3 ,$div5Cultura);


$tabla = new TablaBase(5,1);
$tabla->AddTablaEnFila(1 ,1 ,$tbase1);
$tabla->AddTablaEnFila(2 ,1 ,$tbase2);
$tabla->AddTablaEnFila(3 ,1 ,$tbase3);
$tabla->AddTablaEnFila(4 ,1 ,$tbase4);
$tabla->AddTablaEnFila(5 ,1 ,$tbase5);

$windowMain = new Ventana("ventanaMain", "ventanaMain", "ventanaMain", "Main_styleCentro");
$windowMain->SetStyle("overflow:hidden; width:1200px; margin-left: auto; margin-right: auto;");
$windowMain->AddCodigo($tabla->Dibujar() );
//-----------------------------------------------------------
//agrego codigo al objeto pagina
$pag->AddCodigo( $windowMain->Dibujar() );

//se crea la pagina....
echo $pag->Dibujar();

	