var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
 // AgregarBotonInfo();  
  AgregarBotonInicio();    
  AgregarBotonPrevious();
  AgregarBotonNext();  
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
	var text = "<div class='BotonGeneral' id='botonOK'> OK </div>";
	var x = $("body");
	x.append(text);
	
	x=$("#botonSieguiente");
    x.click(ButtonNextPage);
  
}

function AgregarBotonPrevious()
{
	var text = "<div class='BotonGeneral' id='botonCancelar'> X </div>";
	var x = $("body");
	x.append(text);
	
	x=$("#botonAnterior");
	x.click(ButtonPreviousPage);  
}  

function ButtonPreviousPage(){prevSlide();}
function ButtonNextPage(){nextSlide();}
function ButtonInicio(){$(location).attr('href','inicio.html');	}
function ButtonInfo(){}

