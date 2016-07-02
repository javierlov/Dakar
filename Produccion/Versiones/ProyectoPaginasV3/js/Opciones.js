var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x=$("#btn1");
  x.click(clickboton1);
      
  AgregarPaginaInicial();
  AgregarSoloTexto();
  AgregarTestoH3();  
  
  var arrayDatos = ["INFORME FINAL 1922","INFORME FINAL 1923","INFORME FINAL 1924", "INFORME FINAL 1922","INFORME FINAL 1923","INFORME FINAL 192"];  
  AgregarInformeTexto("El mejor informe", arrayDatos);
  
  var arrayOptions = ["1922","1923","1924"];
  AgregarPaginaTextoOption("¿Cual de estos valores es Mayor?", arrayOptions);
  AgregarPaginaTextoOption("¿Cual de estos valores es Menor?", arrayOptions);
  
  arrayOptions = ["1988","1999","1955"];
  AgregarPaginaTextoOption("¿En que año nacio Juan?", arrayOptions);
  AgregarPaginaTextoOption("¿Cuanto es 1998 + 1?", arrayOptions);
    
  var arrayChecks = ["1930","1934","1960","1978","1982","1986"] 
  AgregarPaginaTextoCheck("¿En que año se descubrio America?", arrayChecks);
  AgregarPaginaTextoCheck("¿Que Mundiales gano Argentina?", arrayChecks); 
  
  arrayChecks = ["1922","1923","1924","2010", "2012"];
  AgregarPaginaTextoCheck("¿1900 es Mayor que?", arrayOptions);
  AgregarPaginaTextoCheck("¿2000 es Menor?", arrayOptions);
  
  AgregarPaginaEvaluacion();
  
  x=$("#opt1");
  x.click(optboton1);
    
}

function optboton1(){alert('i am a opt1');}
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
