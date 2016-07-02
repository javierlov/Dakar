var x;
var $CreatePages =[];
x=$(document);
x.ready(inicializarEventos);
x.bind(TomarParametros(), LeerJsonPagina());


function inicializarEventos()
{		
	var x=$("section");				
	$.each( $CreatePages, function(i, n){
		x.append(n);
	});	
}

function TomarParametros()
{
	$(document).data('Materia', TomarVariable('Materia'));
	$(document).data('Unidad', TomarVariable('Unidad'));
	
	var textomsg = 'TomarParametros() ' + $(document).data('Materia');
	textomsg +=	" unidad "+ $(document).data('Unidad');
	//alert(textomsg);
	//var a = TomarVariable('Alumno');	
}

function CrearPages(Titulo)
{	
	var text="<article><h1>AddPages "+Titulo+"</h1>";
		text+="<p>* Terminar la Tarea</p><br/>";	
		text+="</article>";
		
	var x=$("section");			
	$CreatePages.push(text);		
}


function AddPages(Titulo)
{	
	var text="<article><h1>AddPages "+Titulo+"</h1>";
		text+="<p>* Terminar la Tarea</p><br/>";	
		text+="</article>";
		
	var x=$("section");			
	$CreatePages.push(text);		
}

function SeleccionaPagina()
{	
	LeerJsonTarea("js/Data/Proyectos/Tareas/xTarea.json", MuestroPagina);   		
}

function RecuperarPath()
{
	var dirmateria = $(document).data('Materia');
	var dirunidad =	$(document).data('Unidad');
	
	var dirarchivo = "js/Data/Proyectos/Tareas/Materias/";
	dirarchivo +=dirmateria+"/Unidad";
	dirarchivo +=dirunidad+"/xTarea.json";
	
	return dirarchivo;
}

function LeerJsonPagina()
{	
	//var archivo = "js/Data/Proyectos/Tareas/Materias/Geografia/Unidad1/xTarea.json";
	//var archivo = "js/Data/Proyectos/Tareas/Materias/Historia/Unidad1/xTarea.json";
	var archivo = RecuperarPath();
	
	
	$.getJSON(archivo, function(result){		
		$.each(result.proyecto[1].tarea[0].paginas, function(i, n){						
			var titulo=result.proyecto[1].tarea[0].paginas[i].titulo;				
			var contar=result.proyecto[1].tarea[0].paginas.length;	
			var opcion=result.proyecto[1].tarea[0].paginas[i].TipoPagina;	
			var text="";
			
			switch(opcion)
			{
				case "Inicio":
					var objetivos=result.proyecto[1].tarea[0].paginas[i].objetivos;	
					text=FormatoPaginaInicial(titulo, objetivos);
					break;
				case "PreguntaOptionsText":
					var arrayOptions = result.proyecto[1].tarea[0].paginas[i].opciones;	
					text=FormatoPaginaTextoOption(titulo, arrayOptions, i);
					break;
				case "PreguntaChecksText":
					var arrayChecks = result.proyecto[1].tarea[0].paginas[i].opciones;	
					text=FormatoPaginaTextoCheck(titulo, arrayChecks);
					break;
				case "TituloTextoPagina":
					var arrayTitulos = result.proyecto[1].tarea[0].paginas[i].opciones;	
					text=FormatoSoloTexto(titulo, arrayTitulos);
					break;
				case "Fin":
					var fechaentrega=result.proyecto[1].tarea[0].paginas[i].fechaentrega;
					var calificacion=result.proyecto[1].tarea[0].paginas[i].calificacion;
					text=FormatoPaginaFinal(titulo, fechaentrega, calificacion)
					break;
				default:
					text=FormatoSinFormato("pagina sin formato");
			}
			/*
			var text="<article><h1>json page ("+textotit + " - "+ contar + ")</h1>";
			text+="<p>* Terminar la Tarea</p><br/>";	
			text+="</article>";
			*/
			var x=$("section");						
			$CreatePages.push(text);		
		});	
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
		
function dos()
{
	var x=$("#tareas");	x.text("due");
	
	$.getJSON( "js/Data/Proyectos/Tareas/xTarea.json", 
		function(result){
			var xtext = result.tarea[0].paginas[0].nombre;			
			xtext += result.tarea[0].paginas[0].opciones;			
			//xtext += result.tarea[0].paginas[0].Opciones[0].c;							
			//xtext += result.titulo;			
			x.text(xtext);
		});
}


function eliminarElementos()
{
  var x;
  x=$("ul");
  x.empty();
}

function restaurarLista()
{
  $("ul").html('<li>Primer item.</li><li> Segundo item.</li><li>Tercer item.</li><li>Cuarto item.</li>');
}

function anadirElementoFinal()
{
  var x;
  x=$("ul");
  x.append("<li>otro item al final</li>");
}

function anadirElementoPrincipio()
{
  var x;
  x=$("ul");
  x.prepend("<li>otro item al principio</li>");
}

function eliminarElementoFinal()
{
  var x;
  x=$("li");
  var cantidad=x.length;
  x=x.eq(cantidad-1);
  x.remove();
}

function eliminarElementoPrincipio()
{
  var x;
  x=$("li");
  x=x.eq(0);
  x.remove();
}

function eliminarPrimeroSegundo()
{
  var x;
  x=$("li");
  x=x.lt(2);
  x.remove();
}

function eliminarDosUltimos()
{
  var x;
  x=$("li");
  x=x.gt(x.length-3);
  x.remove();
}
