var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
      
  ConfigurarPaginaInicial();
  ConfigurarPaginaDatosProyecto();
  ConfigurarPaginaObjetivos();  
  ConfigurarAgergarPagina();
  ConfigurarPaginaEvaluacion();

  
  /*
  ConfigurarPaginaPrimerosDatos();  
  AgregarSoloTexto();
  AgregarTestoH3();  
  
  var arrayDatos = ["INFORME FINAL 1922","INFORME FINAL 1923","INFORME FINAL 1924", "INFORME FINAL 1922","INFORME FINAL 1923","INFORME FINAL 192"];  
  AgregarInformeTexto("El mejor informe", arrayDatos);
  
  var arrayOptions = ["1922","1923","1924"];
  ConfigurarPaginaTextoOption("¿Cual de estos valores es Mayor?", arrayOptions);
  ConfigurarPaginaTextoOption("¿Cual de estos valores es Menor?", arrayOptions);
  
  arrayOptions = ["1988","1999","1955"];
  ConfigurarPaginaTextoOption("¿En que año nacio Juan?", arrayOptions);
  ConfigurarPaginaTextoOption("¿Cuanto es 1998 + 1?", arrayOptions);
    
  var arrayChecks = ["1930","1934","1960","1978","1982","1986"] 
  ConfigurarPaginaTextoCheck("¿En que año se descubrio America?", arrayChecks);
  ConfigurarPaginaTextoCheck("¿Que Mundiales gano Argentina?", arrayChecks); 
  
  arrayChecks = ["1922","1923","1924","2010", "2012"];
  ConfigurarPaginaTextoCheck("¿1900 es Mayor que?", arrayOptions);
  ConfigurarPaginaTextoCheck("¿2000 es Menor?", arrayOptions);
  
      
    */
}

function GuardarDatos(){
	var txtmsg = 'En este momento se guardan los datos en un archivo xTarea.json + directorio';
	var x = $("#msgguardar");
	x.text(txtmsg);
}
function clickboton1(){	alert('esas en el click');}
	
function ConfigurarAgergarPagina()
{
	var text = "<article>";
	text+="<div id='contenedor'>";
	text+="<div class='header'>";	
	text+="<h1>Nueva Tarea</h1> </div>";
	
	text+="<div class='izquierda'>";	
text+="<input type='button' id='boton1' value='Eliminar la lista completa.'><br>";
text+="<input type='button' id='boton2' value='Agregar Pagina de checks'><br>";
text+="<input type='button' id='boton3' value='Agregar Pagina de options'><br>";
text+="<input type='button' id='boton4' value='Agregar Pagina de Texto'><br>";

	text+="</div><div class='derecha'>";		
	text += "<p><ul type='Pagina Tipo'></ul></p>";	
	text += "</article></div></div>";
	var x = $("section");
	
	x.append(text);
	EventosBotonesPaginas();
	
}

function EventosBotonesPaginas()
{
  var x;
  x=$("#boton1");  x.click(eliminarElementos);
  x=$("#boton2");  x.click(agregarPaginaC);
  x=$("#boton3");  x.click(agregarPaginaO);
  x=$("#boton4");  x.click(agregarPaginaT); 
}

function agregarPaginaC(){  var x;  x=$("ul");  x.append("<li>Pregunta-Checks-Texto</li>");}
function agregarPaginaO(){  var x;  x=$("ul");  x.append("<li>Pregunta-Options-Texto</li>");}
function agregarPaginaT(){  var x;  x=$("ul");  x.append("<li>Pregunta-Texto-Texto</li>");}
function eliminarElementos(){ var x;  x=$("ul");  x.empty();}
	
function ConfigurarPaginaInicial()
{
	var text = "<article><h1>Nueva Tarea</h1>";
	text += "<p>En las proximas paginas se podra configurar una nueva tarea</p><br/>";	
	text += "</article>";
	var x = $("section");
	
	x.append(text);	
}

function ConfigurarPaginaDatosProyecto()
{
	var text = "<article><h1>Datos del proyecto</h1>";			
	text += "<p>Materia: <input type='text' name='Matematica' value='Matematica'></p>";	
	text += "<p>Curso: <input type='text' name='Primero' value='Primero'></p>";	
	text += "<p>Division: <input type='text' name='Div' value='A'></p>";	
	text += "<p>Escuela: <input type='text' name='Escuela' value='Numero 1'></p>";	
	text += "<p>Tema: <input type='text' name='Tema' value='Calculo'></p>";	
	
	text += "</article>";
	var x = $("section");
	
	x.append(text);	
}



function ConfigurarPaginaObjetivos()
{
	var text = "<article><h1>Primer Pagina Tarea</h1>";
	text += "<p>Titulo Tarea: <input type='text' name='titulo' value='Calculo Numerico'></p>";	
	text += "<p>Fecha Entrega: <input type='text' name='titulo' value='2013-10-22'></p>";	
	text += "<p>Objetivos: <textarea rows='7' cols='40'>El análisis numérico o cálculo numérico es la rama de las matemáticas que se encarga de diseñar algoritmos para, a través de números y reglas matemáticas simples, simular procesos matemáticos más complejos aplicados a procesos del mundo real.</textarea></p><br/>";		
	text += "</article>";
	var x = $("section");
	
	x.append(text);	
}

function ConfigurarPaginaPrimerosDatos()
{
	var text = "<article><h1>Primeros Datos Tare</h1>";
	text += "<p>Titulo: <input type='text' name='titulo'></p><br/>";	
	text += "<p>Fecha Entrega: <input type='text' name='titulo'></p><br/>";	
	text += "<p>Objetivos: <textarea rows='2' cols='30'>Objetivo</textarea></p><br/>";		
	text += "</article>";
	var x = $("section");
	
	x.append(text);	
}

function ConfigurarPaginaEvaluacion()
{
	var text = "<article>";
	text+="<div id='contenedor'>";
	text+="<div class='header'>";	
	text+="<h1>Evaluacion / Puntajes </h1> </div>";
	text+="<div class='principal'>";
		
	text += "<p>Modo Evaluacion: ";	
	text += "<select name='MetodEvaluacionSelect'>";
    text += "<<option value='Puntaje1a10' selected='selected'>Puntaje 1 al 10</option>";
    text += "<<option value='Porcentaje'>Porcentaje </option>";
    text += "<<option value='Votacion'>Votacion</option> </select> </p>";
	text += "<p>Titulo Evaluacion: <input type='text' name='tituloEval' value='Calculo Num'></p>";	
	text += "<p><input type='button' name='GuardarDatos' id='GuardarDatos' value='Guardar'></p>";	
	text += "<p><div id='msgguardar'>Datos</div></p>";
	text += "</article></div></div>";
	
	var x = $("section");
	x.append(text);
	
	x=$("#GuardarDatos");
	x.click(GuardarDatos);
  
}

function ConfigurarPaginaTextoOption(titulo, arrayOptions)
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

function ConfigurarPaginaTextoCheck(titulo, arrayChecks)
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
