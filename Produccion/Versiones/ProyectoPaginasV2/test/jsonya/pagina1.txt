<?php
$conexion=mysql_connect("localhost","root","z80") 
  or die("Problemas en la conexion");
mysql_select_db("bdajax",$conexion) or 
 die("Problemas en la seleccion de la base de datos");

$registros=mysql_query("select codigo,descripcion,precio from perifericos",$conexion) 
  or die("Problemas en el select".mysql_error());

while ($reg=mysql_fetch_array($registros))
{
  $vec[]=$reg;
}

require('../JSON.php');
$json=new Services_JSON();
$cad=$json->encode($vec);
echo $cad;
?>