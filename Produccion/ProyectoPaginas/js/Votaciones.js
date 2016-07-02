var x;
x=$(document);
x.ready(inicializarEventos);
	
function inicializarEventos()
{	
	var Objetivos = ["De las tareas presentadas","Seleccionar las 3 Mejores",
	"La primera que vote, se lleva 3 Puntos",
	"La segunda que vote, se lleva 2 Puntos",
	"La tercera que vote, se lleva 1 Puntos"]; 	
		
	FormatoInformeTexto("Votaciones", Objetivos);
		
	var arrayChecksVotaciones = ["Trabajo Equipo 1","Trabajo Equipo 2","Trabajo Equipo 3","Trabajo Equipo 4","Trabajo Equipo 5","Trabajo Equipo 6"] ;
	$(document).data('ChecksVotaciones', arrayChecksVotaciones);
	FormatoPaginaTextoColumnas("¿Seleccione los 3 Mejores?", arrayChecksVotaciones);
	
	var x=$("#check0");  x.click(clickcheck1);	
	var x=$("#check1");  x.click(clickcheck2);
	var x=$("#check2");  x.click(clickcheck3);
	var x=$("#check3");  x.click(clickcheck4);
	var x=$("#check4");  x.click(clickcheck5);	
	var x=$("#check5");  x.click(clickcheck6);	
    
	LimpiarVotaciones();
	
}

function clickcheck1(arrayChecks){var x=$("#votaciones");	AgregaVotacionLista(x, 0);}
function clickcheck2(arrayChecks){var x=$("#votaciones");	AgregaVotacionLista(x, 1);}
function clickcheck3(arrayChecks){var x=$("#votaciones");	AgregaVotacionLista(x, 2);}
function clickcheck4(arrayChecks){var x=$("#votaciones");	AgregaVotacionLista(x, 3);}
function clickcheck5(arrayChecks){var x=$("#votaciones");	AgregaVotacionLista(x, 4);}
function clickcheck6(arrayChecks){var x=$("#votaciones");	AgregaVotacionLista(x, 5);}

function LimpiarVotaciones(){var x=$("#votaciones");x.click(EliminarVotaciones); }

function AgregaVotacionLista(lista, id){ 
	var aChecksVotaciones = $(document).data('ChecksVotaciones');
	if(lista.text() != "Votaciones"){		
		VotacionAlFinal(aChecksVotaciones[id]);
	}else{
		lista.html("<ul>Votaciones</ul>");
		VotacionAlFinal(aChecksVotaciones[id]);
	}
}

function VotacionAlFinal(textovotado)
{  var x;  x=$("ul");  x.append("<li>"+textovotado+"</li>");}

function EliminarVotaciones()
{  var x;  x=$("ul");  x.empty(); x.text("Votaciones"); }
	

function clickboton1(){	alert('esas en el click');}
	
function AgregarPaginaInicial()
{
	var text = "<article><h1>Indice nueva<br>Objetivos</h1>";
	text += "<p>* Terminar la Tarea <br/>* Fecha de entrega</p><br/>";	
	text += "</article>";
	var x = $("section");
	
	x.append(text);	
}



function AgregarPaginaEvaluacion()
{
	var text = "<article><h1>Evaluacion <br>Objetivos</h1>";
	text += "<p>* Puntaje obtenido <br>* Fecha Finalizacion</p></article>";
	
	var x = $("section");
	x.append(text);
}

function AgregarPaginaTextoOption(titulo, arrayOptions)
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

function AgregarPaginaTextoCheck(titulo, arrayChecks)
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
	text += "<p id='columna1'>1 This is a slide with just text. This is a slide with just text.</p>";
	text += "<a id='columna2'>2 This is a slide with just text. This is a slide with just text.</a><br/>";
	text += "<a> 3 This is a slide with just text. This is a slide with just text.</a>";
	text += "</p><p>4 There is more text just underneath.</p></article>";
	
	var x = $("section");
	x.append(text);
}

function AgregarTestoH3()
{
	var text = "<article><h3>Simple slide with header and text</h3><p>";
	text += "<a>1 This is a slide with just text. This is a slide with just text.</a><br/>";
	text += "<a>2 This is a slide with just text. This is a slide with just text.</a><br/>";
	text += "<a>3 This is a slide with just text. This is a slide with just text.</a><br/>";
	text += "</p> <p>4 There is more text just underneath with a <code>code sample: 5px</code>.</p></article>";
	
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
