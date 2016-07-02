// File: leerXML.js

// Aqui se carga la funcion cuando se carga completament el arbol DOm de nuestra pagina index.html
$(document).ready(function(){

// Creamos una funcion que se activa cuando se le da clic al elemento html con id=leerxml
$("#leerxml").click(function(){
$.get("students.xml",{},function(xml){ //Abrimos el archivo students.xml

// Crearemos un string HTML
HTMLcontent = '<br/><br/>';
HTMLcontent += '<table width="70%" border="1" cellpadding="0" cellspacing="0">';
HTMLcontent += '<th>Nombre</th><th>Edad</th><th>Telefono</th><th>Carnet</th>';

//El ciclo se va repetir cada vez que se encuentre la etiqueta estudiante
$('estudiante',xml).each(function(i) {
nombre = $(this).find("nombre").text();
 //buscamos el valor que contiene la etiqueta nombre y lo guardamos en la variable //nombre
edad = $(this).find("edade").text();
telefono = $(this).find("telefono").text();
carnet = $(this).find("carnet").text();

//Construye una fila de la tabla y la guarda en un string
mydata = crearFilaHtml(nombre,edad,telefono,carnet);
HTMLcontent = HTMLcontent + mydata;
}); //final de leer cada etiqueta estudiante
HTMLcontent += '</table>';

// Actualizamos el DIV con id=ContenArea con el string html
$("#ContentArea").append(HTMLcontent);
}); //fin de $.get

});// fin de $("#leerxml").click(function(){
});//fin de document ready

function crearFilaHtml(nombre,edad,telefono,carnet){

// Construimo el strin HTML que contiene una fila en la tabla y lo retornamos
filaHTML = '';
filaHTML += '<tr>';
filaHTML += '<td>'+ nombre + '</td>';
filaHTML += '<td>'+ edad +'</td>';
filaHTML += '<td>'+ telefono +'</td>';
filaHTML += '<td>'+ carnet +'</td>';
filaHTML += '</tr>';
return filaHTML;
}