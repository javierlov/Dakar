<?php

/*incluimos el archivo de la clase y creamos la instancia para generar

el formulario*/

include("Formulario/Form.php");
$frm = new Form();
 

/*

Iniciar el formulario

openform(nombre, metodo, accion, enctype, onsubmit)

nombre = nombre del formulario

metodo = get o post (por defecto es post)

accion = el script que se ejecutara cuando se envie el formulario

enctype = determina como sera codificada la data(application/x-www-form-urlencoded,

                                                 multipart/form-data,

                                                 text/plain)

onsubmit = ejecutara el script de javascript para validar el formulario.

 

*/

$formulario = $frm->openform("form1","post","procesa_datos.php","multipart/form-data");
 

/*openfieldset(leyenda, tamaños)

inicia el fieldset

leyenda = texto que aparecera

tamaño = ancho del fieldset

*/

$formulario .= $frm->openfieldset("Cajas de Texto",300);
 

/*

añadir input (texto, password, file, submit, reset)

addInput(tipo, nombre, etiqueta, valor)

    tipo = puede ser text, password, submit, reset

    nombre =  nombre de la caja de texto sera usado tambien como id

    etiqueta = etiqueta a mostrar en los (en los submit y reset no se usa)

    valor = si mostrara algun valor por defecto(en el caso de submit y reset

                                                es el texto que mostrara el

                                                boton)

*/

$formulario .= $frm->addInput("text","nombre","Nombres: ")."<br>";
$formulario .= $frm->addInput("text","apellido","Apellidos: ")."<br>";
$formulario .= $frm->addInput("password","password","Contraseña: ")."<br>";
$formulario .= $frm->addInput("hidden","opcion","",1);
$formulario .= $frm->addInput("file","foto","Foto: ");
/*

closefieldset

cierra el fieldset

*/

$formulario .= $frm->closefieldset();
 

/*

añadir radio boton

addcheckradio(tipo,nombre, valores, seleccionado)

    tipo = puede ser checkbox o radio.

    nombre = nombre del boton

    valores =  array(valor1=>etiqueta1,valor2=>etiqueta2);
        el array puede ser numerico o de texto.

    seleccionado = cual sera seleccionado por defecto ninguno esta marcado

*/

$formulario .= $frm->openfieldset("Radio Botones",300);
$values = array("M"=>"Masculino","F"=>"Femenino");
$formulario .=  $frm->addcheckradio("radio","sexo",$values,1);
$formulario .= $frm->closefieldset();
 

 

$formulario .= $frm->openfieldset("Radio Botones",300);
$values = array(5=>"Excelente",4=>"Bueno",3=>"Regular",2=>"Malo",1=>"Deficiente");
$formulario .= $frm->addcheckradio("radio","encuesta",$values,1);
$formulario .= $frm->closefieldset();
 

 

$values = array(1=>"Basket",2=>"Futbol",3=>"Tenis",4=>"Beisbol",5=>"Golf",

                6=>"Atletismo",7=>"Musica",8=>"Internet");
$formulario .= $frm->openfieldset("Checkbox",300);
$formulario .= $frm->addcheckradio("checkbox","hobbies",$values,1);
$formulario .= $frm->closefieldset();
 

/*

añadir area de textp

addTextarea(nombre,columnas, filas, etiqueta,valor)

    nombre = nombre de la caja de textp

    columnas y filas = tamaño de la caja de texto(por defecto es 20 cols, 5 rows

    Etiqueta =  valor que mostrara el label de la caja de texto

    valor = si el texto mostrara algo por defecto

*/

$formulario .= $frm->openfieldset("Area de Texto",300);
$formulario .= $frm->addTextarea("direccion",20,5,"Direccion")."<br>";
$formulario .= $frm->closefieldset();
 

/*

añadir select option

addSelect(nombre,valores, etiqueta,multiple)

    nombre = nombre del select

    valores = array tipo (valor1=>texto1,valor2=>texto2)

    Etiqueta =  valor que mostrara el label del select

    multiple = 1 para activar multiple, por defecto es desactivado.

*/

$formulario .= $frm->openfieldset("Select Options",300);
$valores=array("ven"=>"Venezuela","col"=>"Colombia");
$formulario .= $frm->addSelect("paises",$valores, "Paises: ")."<br>";
 

$valores=array(1=>"Amarillo",2=>"Azul",3=>"Rojo");
$formulario .= $frm->addSelect("colores",$valores, "Colores: ",1);
$formulario .= $frm->closefieldset();
 

$formulario .= $frm->addInput("submit","enviar","","Enviar");
$formulario .= $frm->addInput("reset","reset","","Reset");
 

/*

cierra el formulario

closeform()

*/

$formulario .= $frm->closeform();
echo $formulario;
 