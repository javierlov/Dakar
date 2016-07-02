function FormatoPaginaInicial(Titulo, Objetivos)
{
	var text = "<article>";
	text+="<div id='contenedor'>";
	text+="<div class='header'>";
	text+="<h1>"+Titulo+"</h1></div>";
	text+="<div class='principal'>";
	
	for(var i = 0; i < Objetivos.length; i++ )
	{
		text += "<p>* "+Objetivos[i]+"</p><br/>";	
	}
	text += "</article></div></div>";
	
	//var x = $("section");x.append(text);	
	return(text);
}

function FormatoPaginaFinal(Titulo, fechaentrega, calificacion)
{
	var text = "<article>";
	text+="<div id='contenedor'>";
	text+="<div class='header'>";
	text+="<h1>"+Titulo+"</h1></div>";
	text+="<div class='principal'>";	
	text += "<p>* Fecha Entrega: "+fechaentrega+"</p><br/>";	
	text += "<p>* Calificacion: "+calificacion+"</p><br/>";		
	text += "<input type='button' id='Evaluar' value='Evaluar'><br/>";		
	text += "</article></div></div>";	
	//var x = $("section");x.append(text);	
	return(text);
}

function FormatoPaginaTextoOption(titulo, arrayOptions, num)
{
	var text = "<article><h1 class='Titulo'>"+titulo+"</h1>";
	var idcontrol = "opt";
	for(var i = 0; i < arrayOptions.length; i++ )
	{		
		idcontrol = "opt"+(i+1);		
		text += "<p> <input type='radio' name='optios"+num+"' ID='"+idcontrol+"'> "+ arrayOptions[i] +" <br/>";
	}
	text += "</article>";
	
	//var x = $("section");x.append(text);	
	return(text);
}

function FormatoPaginaTextoCheck(titulo, arrayChecks)
{
	var text = "<article><h1 class='Titulo'>"+titulo+"</h1>";
	
	for(var i = 0; i < arrayChecks.length; i++ )
	{		
		text += "<p> <input type='checkbox' name='miCheck'> "+arrayChecks[i]+ "<br/>";
	}
	text += "</article>";
	
	//var x = $("section");x.append(text);	
	return(text);
}

function FormatoSoloTexto(titulo, Textos)
{
	var text = "<article><h1 class='Titulo'>"+titulo+"</h1>";
	for(var i = 0; i < Textos.length; i++ )
	{		
		text += "<p> "+Textos[i]+ "</p><br/>";
	}
	text += "</article>";
	
	//var x = $("section");x.append(text);	
	return(text);
}

function FormatoTestoH3(Textos)
{
	var text = "<article></br>";
	for(var i = 0; i < Textos.length; i++ )
	{		
		text += "<h3> "+Textos[i]+ "</h3><br/>";
	}
	text += "</article>";
	
	//var x = $("section");x.append(text);	
	return(text);
}

function FormatoInformeTexto(titulo, arrayDatos)
{
	var text = "<article class='smaller'>";
	text += "<h3 style='#titulo'>"+titulo+"</h3>";	
	text += "<pre style='margin:10%'>";	
	
	for(var i = 0; i < arrayDatos.length; i++ )
	{				
		text += arrayDatos[i] + '<br>';
	}
	text += "</pre></article>";
	
	//var x = $("section");x.append(text);	
	return(text);
}

function FormatoSinFormato(Textos)
{
	var text = "<article></br>";	
	text += "<h3> "+Textos+ "</h3><br/>";	
	text += "</article>";
	
	//var x = $("section");x.append(text);	
	return(text);
}
