<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
 <body>

<?php
echo "<prev>";
print_r($_POST);
echo "</prev> <br>";
echo "Nombre: ".$_POST['nombre']."<br>";
echo "Apellido: ".$_POST['apellido']."<br>";
echo "Password: ".md5($_POST['password'])."<br>";
echo "Opcion: ".$_POST['opcion']."<br>";
echo "Sexo: ".$_POST['sexo']."<br>";
echo "Opinion del Sitio: ".$_POST['encuesta']."<br>";
$hobbie = $_POST['hobbies'];

foreach($hobbie as $val){

    echo "Hobbie: ".$val."<br>";

}
echo "Direccion: ".$_POST['direccion']."<br>";
echo "Paises: ".$_POST['paises']."<br>";

	if( isset($_POST['colores']) ){
	$colores= $_POST['colores'];
	
	foreach($colores as $val){
		echo "Colores: ".$val."<br>";
	}
	} else
	echo "No selecciono Color <br>";
?>

</body>

</html>