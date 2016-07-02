var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  //AgregarBotonInfo();  
	var x=$("Body");	
	
	//if (x.attr("id")==undefined)alert("No está definida la propiedad border en la tabla");
	if (x.attr("boton")=='Inicio')
	{  AgregarBotonInicio();    }
	if (x.attr("boton")=='Todos')
	{	AgregarBotonInicio(); AgregarBotonPrevious();	  AgregarBotonNext();  }
}

function AgregarBotonInfo()
{
	var text = "<div class='BotonGeneral' id='botonInfo'>Info</div>";
	var x = $("body");
	x.append(text);	
	x=$("#botonInfo");
    x.click(ButtonInfo);
}

function AgregarBotonInicio()
{
	var text = "<div class='BotonGeneral' id='botonInicio'>Inicio</div>";
	var x = $("body");
	x.append(text);	
	x=$("#botonInicio");
    x.click(ButtonInicio);
}

function AgregarBotonNext()
{
	var text = "<div class='BotonGeneral' id='botonSieguiente'> > </div>";
	var x = $("body");
	x.append(text);
	
	x=$("#botonSieguiente");
    x.click(ButtonNextPage);
  
}

function AgregarBotonPrevious()
{
	var text = "<div class='BotonGeneral' id='botonAnterior'> < </div>";
	var x = $("body");
	x.append(text);
	
	x=$("#botonAnterior");
	x.click(ButtonPreviousPage);  
}  

function ButtonPreviousPage(){prevSlide();}
function ButtonNextPage(){nextSlide();}
function ButtonInicio(){$(location).attr('href','inicio.html');	}
function ButtonInfo(){}

