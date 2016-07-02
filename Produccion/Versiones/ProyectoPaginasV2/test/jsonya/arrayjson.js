addEvent(window,'load',inicializarEventos,false);

function inicializarEventos()
{
  var ref=document.getElementById('boton1');
  addEvent(ref,'click',mostrarConversion,false);
}

function mostrarConversion(e)
{
  var obj={
    nombre:'juan',
    edad:25,
    sueldos:[1200,1700,1990]
  };
//convierte array a json
  var cadena=obj.toJSONString();
  document.write(cadena);
}



//***************************************
//Funciones comunes a todos los problemas
//***************************************
function addEvent(elemento,nomevento,funcion,captura)
{
  if (elemento.attachEvent)
  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;
  }
  else  
    if (elemento.addEventListener)
    {
      elemento.addEventListener(nomevento,funcion,captura);
      return true;
    }
    else
      return false;
}