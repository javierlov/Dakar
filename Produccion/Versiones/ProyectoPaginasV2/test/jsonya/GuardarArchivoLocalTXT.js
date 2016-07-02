// Set the page event handlers for onload and unload.
if (window.attachEvent) 
{
window.attachEvent("onload", Page_Load);
} 
else 
{
// For some browsers window.attachEvent does not exist.
window.addEventListener("DOMContentLoaded", Page_Load, false);
}
// Load the page. 
function Page_Load() 
{	
//document.getElementById('boton-txt').addEventListener('click', function () {	
var datos = obtenerDatos();
downloadFile(generarTexto(datos), 'archivo.txt');
//}, false);
}


function downloadFile(contblob, nomarchi)
{
var reader = new FileReader();
//Definimos la función que manejará el archivo
//una vez haya terminado de leerlo
reader.onload = function (event) {
//Usaremos un link para iniciar la descarga 
var save = document.createElement('a');
save.href = event.target.result;
save.target = '_blank';
//Truco: así le damos el nombre al archivo 
save.download = nomarchi || 'archivo.dat';
var clicEvent = new MouseEvent('click', {
'view': window,
'bubbles': true,
'cancelable': true
});
//Simulamos un clic del usuario
//no es necesario agregar el link al DOM.
save.dispatchEvent(clicEvent);
//Y liberamos recursos...
(window.URL || window.webkitURL).revokeObjectURL(save.href);
};
//Leemos el blob y esperamos a que dispare el evento "load"
reader.readAsDataURL(contblob);
};

function obtenerDatos() {
return ('mis datos');
/*
return (
nombre: 'jose',//document.getElementById('textNombre').value,
telefono: '123231232',//document.getElementById('textTelefono').value,
fecha: (new Date()).toLocaleDateString()
);
*/
};

//Genera un objeto Blob con los datos en un archivo TXT
function generarTexto(datos) {
var texto = [];
texto.push('Datos Personales:\n');
texto.push('Nombre: ');
texto.push(datos.nombre);
texto.push('\n');
texto.push('Teléfono: ');
texto.push(datos.telefono);
texto.push('\n');
texto.push('Fecha: ');
texto.push(datos.fecha);
texto.push('\n');
//El constructor de Blob requiere un Array en el primer 
//parámetro así que no es necesario usar toString. El 
//segundo parámetro es el tipo MIME del archivo
return new Blob(texto, {
type: 'text/plain'
});
};
