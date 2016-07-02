var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{      
  AgregarPaginaInicial();    
}

function FechaActual()
{  var d = new Date();
   //d.setFullYear("1990");//setea 1990 como el año
   return d;
}

function FechaActualFormato()
{
   var d = new Date();
   var fecha = ""
   fecha += (d.getFullYear());
   fecha += (".");
   fecha += (d.getMonth() + 1);
   fecha += (".");
   fecha += (d.getDate());
      
   return fecha;
}
   
function AgregarPaginaInicial_V1()
{	
	var text = "<article><h1>Configuracion</h1>";
	//text += "<h3 style='text-align:center'>" + FechaActualFormato() +"</h3>";
	//text += "<h3 style='text-align:center'>" + FechaActual() +"</h3>";
	text += "<p>Nombre de Usuario</p><br/>";		
	text += ConfiguracionPC();
	text += "<br/>";	
	text += "</article>";
	var x = $("section");

	var text = "<article>";			
	text += "<div id='contenedor'>";
	text += "<div class='header'><h1>Datos Alumno/Docente</h1></div>";
	text += "<div class='izquierda'>";
	text += "<p>Nombre: <input type='text' name='Matematica' value='Matematica'></p>";	
	text += "<p>Curso: <input type='text' name='Primero' value='Primero'></p>";	
	text += "<p>Division: <input type='text' name='Div' value='A'></p>";	
	text += "<p>Escuela: <input type='text' name='Escuela' value='Numero 1'></p>";	
	text += "<p>Codigo: <input type='text' name='Tema' value='Calculo'></p>";			
	text += "</div> <div class='derecha'>";
	text += "</div>";
	text += "</div></article>";
	
	x.append(text);	
}


function AgregarPaginaInicial()
{
	var text = "<article>";			
	text += "<div id='contenedor'>";
	text += "<div class='header'><h1>· Datos Alumno/Docente ·</h1></div>";
	text += "<div class='izquierda'>";
	text += "<p style='text-align:right'>Nombre: </p>";	
	text += "<p style='text-align:right'>Año: </p>";	
	text += "<p style='text-align:right'>Division: </p>";	
	text += "<p style='text-align:right'>Escuela: </p>";	
	text += "<p style='text-align:right'>Codigo: </p>";			
	text += "<p style='text-align:right'><input type='Button' name='Guardar' value='Guardar' id='BotonGuardar'></p>";				
	text += "</div> <div class='derecha'>";
	text += "<p style='text-align:left'><input type='text' name='Nombre' value='Marcos L.'></p>";	
	text += "<p style='text-align:left'><input type='text' name='Anno' value='1'></p>";	
	text += "<p style='text-align:left'><input type='text' name='Divis' value='A'></p>";	
	text += "<p style='text-align:left'><input type='text' name='Escuela' value='Numero 1'></p>";	
	text += "<p style='text-align:left'><input type='text' name='Codigo' value='35211455'></p>";
	text += "<div style='text-align:left'  id='datosConfig'></p>";				
	
	text += "</div>";
	text += "</div></article>";
	
	var x = $("section");	
	x.append(text);	
	
	x=$("#BotonGuardar"); x.click(GuardaDatosConfig);	  
	
}

function GuardaDatosConfig() {
	var txtmsg = 'Estos datos se guardaran en un archivo de configuracion';
	var x = $("#datosConfig");
	x.text(txtmsg);	
}
 
function ConfiguracionPC()
{
  var cadena="{ 'microprocesador':'pentium'," +
             "  'memoria':1024," +
             "  'discos':[80,250]" +
             " }";
  var maquina=eval('(' + cadena + ')');
  var resppc = ('microprocesador:'+maquina.microprocesador);
  resppc += ('Memoria ram:'+maquina.memoria);
  resppc += ('Capacidad disco 1:'+maquina.discos[0]);
  resppc += ('Capacidad disco 2:'+maquina.discos[1]);
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
