var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{      
AgregarPagina_Inicial();
AgregarPagina_ConfigNombreProyecto();


var arrayTipoPaginas = ["Pregunta-Checks-Respuesta", "Pregunta-Options-Respuesta", "Pregunta-Imagen-Checks","Pregunta-Imagen-Options", "Titulo-Items-ok", "Titulo-Imagen-Ok"];
AgregarPagina_Nueva("Seleccione Tipo y Cantidad de paginas", arrayTipoPaginas);

AgregarPagina_Evaluacion();    

}

function AgregarPagina_TextoOption(titulo, arrayOptions)
{
	var text = "<article><h1 class='Titulo'>"+titulo+"</h1>";
	var idcontrol = "opt";
	for(var i = 0; i < arrayOptions.length; i++ )
	{		
		idcontrol = "opt"+(i+1);		
		text += "<p> <input type='radio' name='optios' ID='"+idcontrol+"'> "+ arrayOptions[i] +" <br/>";
	}
	text += "</article>";
	
	var x = $("section");
	x.append(text);
}

function AgregarPagina_Nueva(titulo, arrayPages)
{
var text = "<article><h1 class='Titulo'>"+titulo+"</h1>";

for(var i = 0; i < arrayPages.length; i++ )
{		
	text += "<p> <input type='checkbox' name='miCheck'> "+arrayPages[i]+ "<br/>";
}

text += "</article>";

var x = $("section");
x.append(text);
}

function AgregarPagina_ConfigNombreProyecto()
{
	var text = "<article><h1>Configurar Nueva Tarea</h1>";

	text += "<p>Materia: <input type='Text' name='Txnombre' ID='txnombre'>  <br/>";
	text += "<p>Año y Division:  <input type='Text' name='Txnombre' ID='txnombre'>  <br/>";
	text += "<p>Fecha Entrega:  <input type='Text' name='Txnombre' ID='txnombre'>  <br/>";
	text += "<p>Objetivo:  <input type='Text' name='Txnombre' ID='txnombre'>  <br/>";
	text += "<p>Descripcion:  <input type='Text' name='Txnombre' ID='txnombre'>  <br/>";
	text += "</article>";

	var x = $("section");	
	x.append(text);	

}
	
function AgregarPagina_Inicial()
{
	var text = "<article><h1>Crea tu Tarea</h1>";
	text += "<p>* Terminar la Tarea <br/>* Fecha de entrega</p><br/>";	
	text += "</article>";
	var x = $("section");
	
	x.append(text);	
}

function AgregarPagina_Evaluacion()
{
	var text = "<article><h1>Guardar Tarea</h1>";
	text += "<p>Fecha Entrega</p></article>";
	
	var x = $("section");
	x.append(text);
}

function AgregarPagina_TextoOption(titulo, arrayOptions)
{
	var text = "<article><h1 class='Titulo'>"+titulo+"</h1>";
	var idcontrol = "opt";
	for(var i = 0; i < arrayOptions.length; i++ )
	{		
		idcontrol = "opt"+(i+1);		
		text += "<p> <input type='radio' name='optios' ID='"+idcontrol+"'> "+ arrayOptions[i] +" <br/>";
	}
	text += "</article>";
	
	var x = $("section");
	x.append(text);
}

function AgregarPagina_TextoCheck(titulo, arrayChecks)
{
	var text = "<article><h1 class='Titulo'>"+titulo+"</h1>";
	
	for(var i = 0; i < arrayChecks.length; i++ )
	{		
		text += "<p> <input type='checkbox' name='miCheck'> "+arrayChecks[i]+ "<br/>";
	}
	text += "</article>";
	
	var x = $("section");
	x.append(text);
}

function AgregarSoloTexto()
{
	var text = "<article><br><p>";
	text += "<p id='columna1'>(a.columna1)1 This is a slide with just text. This is a slide with just text.</p>";
	text += "<a id='columna2'>(a.columna2)2 This is a slide with just text. This is a slide with just text.</a><br/>";
	text += "<a>(a) 3 This is a slide with just text. This is a slide with just text.</a>";
	text += "</p><p>(p)4 There is more text just underneath.</p></article>";
	
	var x = $("section");
	x.append(text);
}

function AgregarTestoH3()
{
	var text = "<article><h3> (h3)Simple slide with header and text</h3><p>(p)";
	text += "<a>(a)1 This is a slide with just text. This is a slide with just text.</a><br/>";
	text += "<a>2 This is a slide with just text. This is a slide with just text.</a><br/>";
	text += "<a>3 This is a slide with just text. This is a slide with just text.</a><br/>";
	text += "</p> <p>4(p) There is more text just underneath with a <code>(code)code sample: 5px</code>.</p></article>";
	
	var x = $("section");
	x.append(text);
}

function AgregarInformeTexto(titulo, arrayDatos)
{
	var text = "<article class='smaller'>";
	text += "<h3 style='#titulo'>"+titulo+"</h3>";	
	text += "<pre style='margin:10%'>";	
	for(var i = 0; i < arrayDatos.length; i++ )
	{				
		text += arrayDatos[i] + '<br>';
	}
	text += "</pre></article>";
	
	var x = $("section");
	x.append(text);
}
