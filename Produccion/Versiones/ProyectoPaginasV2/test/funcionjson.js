var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$("#boton1");
  x.click(presionSubmit);
  
  x=$("#botontxt");
  x.click(presiontxt);
}

function presiontxt()
{
  $.getJSON("myfile.txt",llegadaDatos); 
  return false;
}



function presionSubmit()
{
  var v=$("#dni").attr("value");
  $.getJSON("xdata.json",llegadaDatos); 
  return false;
}

function llegadaDatos(datos)
{
 $("#resultados").html("one:"+datos.one+datos.two);
}