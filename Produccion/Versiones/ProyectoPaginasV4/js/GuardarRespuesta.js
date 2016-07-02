var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
	var x=$("#Evaluar");
	x.click(EvaluarGenerarArchivo);
}

function EvaluarGenerarArchivo()
{
//var archivoResp = "js/Data/Proyectos/Tareas/Materias/Matematica/Unidad1/xTareaRespuestas.txt";	
	var archivoResp = "xTareaRespuestas.txt";
	var datosResp = obtenerRespuestas();
	downloadFile(generarTxt(datosResp), archivoResp);
}

function obtenerRespuestas() {

	var resp = "{'proyecto': [{'mate': 'nova'},{'tarea': [{'paginas': [{'opciones': [-1]},{'opciones': [1]},{'opciones': [1]},{'opciones': [3,7]},{'opciones': [-1]},{'opciones': [-1]}]}]}]}";			

	return (resp);
};

function generarTxt(datos) {
	var texto = [];	
	texto.push(datos);	
	return new Blob(texto, {type: 'text/plain'});
};


//----------------------------------
// Set the page event handlers for onload and unload.
/*
if (window.attachEvent) 
{
window.attachEvent("onload", Page_Load);
} 
else 
{
// For some browsers window.attachEvent does not exist.
window.addEventListener("DOMContentLoaded", Page_Load, false);
}
*/
// Load the page. 
/*
function Page_Load() 
{	
//document.getElementById('boton-txt').addEventListener('click', function () {	
	var datos = obtenerDatos();
	downloadFile(generarTexto(datos), 'archivo.txt');
//}, false);
}
*/


function downloadFile(contblob, nomarchi)
{
	var reader = new FileReader();
	reader.onload = function (event) {
	var save = document.createElement('a');
		save.href = event.target.result;
		save.target = '_blank';
		save.download = nomarchi || 'xTareaRespuestas.json';

	var clicEvent = new MouseEvent('click', {'view': window,'bubbles': true,'cancelable': true});
	save.dispatchEvent(clicEvent);
	
	(window.URL || window.webkitURL).revokeObjectURL(save.href);};	
	reader.readAsDataURL(contblob);
};
///--------------------------------------------------
function obtenerDatos() {
	return ('mis datos');
};

//Genera un objeto Blob con los datos en un archivo TXT
function generarTexto(datos) {
	var texto = [];
	/*
	var textvalues=jquery.parseJSON(datos);
    var salida='';
    $.each(textvalues.proyecto[1].tarea[0].paginas, function(i, n){						
		var titulo=textvalues.proyecto[1].tarea[0].paginas[i].titulo;
		var text="";
		});
	*/
	var textotit="titulo";	
	texto.push(datos);
	/*
	texto.push('Respuestas:\n');
	texto.push('Titulo: ');
	texto.push(textotit);
	texto.push('\n');
	texto.push('Teléfono: ');
	texto.push(textotit);
	texto.push('\n');
	texto.push('Fecha: ');
	texto.push(textotit);
	texto.push('\n');
	*/
	//El constructor de Blob requiere un Array en el primer 
	//parámetro así que no es necesario usar toString. El 
	//segundo parámetro es el tipo MIME del archivo
	return new Blob(texto, {type: 'text/plain'});
};
