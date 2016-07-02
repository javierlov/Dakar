var x;
x=$(document);
x.ready(inicializarEventos);

var $verPagina; 	

function inicializarEventos()
{		
	
}



function LeerJsonHacerPagina()
{	
	var archivo = "js/Data/Proyectos/Tareas/xTarea.json";
	
	$.getJSON(archivo, function(result){		
		var textotit=result.proyecto[1].tarea[0].paginas[0].titulo;	
		
		var text="<article><h1>json page</h1>";
		text+="<p>* Terminar la Tarea</p><br/>";	
		text+="</article>";
		
		var x=$("section");			
		x.append(text);			
	});
}
function AddPages()
{		
	//alert($divs);
	//alert($ResultxTarea.proyecto[1].tarea[0].paginas[0].titulo);
	//var titulopesos = $verPagina.proyecto[1].tarea[0].paginas[0].titulo;	
	var text="<article><h1>vacio</h1>";
		text+="<p>* Terminar la Tarea</p><br/>";	
		text+="</article>";
		
	var x=$("section");			
	x.append(text);		
}

function seleccionapagina()
{	
	LeerJsonTarea("js/Data/Proyectos/Tareas/xTarea.json", MuestroPagina);   	
	//alert('seleccionapagina ' + $verPagina);
}

function LeerJsonPagina()
{	
	var archivo = "js/Data/Proyectos/Tareas/xTarea.json";
	
	$.getJSON(archivo, function(result){		
			var textotit=result.proyecto[1].tarea[0].paginas[0].titulo;	
			
			var text = "<!DOCTYPE html>";
			text += "<html><head><title>Desde cero</title>";
			text += "</head><body style='display: none' boton="Todos"><section class='slides'>";			
			text += "<article><h1>"+textotit+"</h1>";
			text += "<p>* Terminar la Tarea <br/>* Fecha de entrega</p><br/>";	
			text += "</article>";
			
			var x = $("section");			
			x.append(text);							
	});
}


function LeerJsonTarea(archivo, funcionM)
{	
	$.getJSON(archivo, function(result){		
		funcionM(result);		
	});
}

function AgregarPaginaInicial()
{
	var text = "<article><h1>Indice nueva<br>Objetivos</h1>";
	text += "<p>* Terminar la Tarea <br/>* Fecha de entrega</p><br/>";	
	text += "</article>";
	var x = $("section");
	
	x.append(text);	
}

function MuestroPagina(result)
{		
	//var x=$("#tareas");			
	//var xtext = result.proyecto[1].tarea[0].paginas[1].titulo;			
	//    xtext += " ..... " +result.proyecto[0].mate;			
	//x.text(xtext);	
	

	//var x=$("#titulo");			
	//x.text(result.proyecto[1].tarea[0].paginas[0].titulo);			
	
	var text = "<article><h1>Indice nueva<br>Objetivos</h1>";
	text += "<p>* Terminar la Tarea <br/>* Fecha de entrega</p><br/>";	
	text += "</article>";
	var x = $("section");	
	x.append(text);	
	
	$verPagina = text;
	var x=$("#msg");	x.text($verPagina);
	
	
	/*
	FormatoPaginaInicial(result.proyecto[1].tarea[0].paginas[0].titulo, result.proyecto[1].tarea[0].paginas[0].objetivos);
	FormatoPaginaFinal(result.proyecto[1].tarea[0].paginas[0].titulo, result.proyecto[1].tarea[0].paginas[0].objetivos);
	*/
}


