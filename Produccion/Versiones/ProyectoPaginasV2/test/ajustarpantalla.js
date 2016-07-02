var x;
x=$(document);
x.ready(inicializarEventos);


function inicializarEventos()
{
  var x;
  x=$("p");
  x.click(presionParrafoDocumento);
  x=$("#tabla2 p");
  x.click(presionpresionParrafoSegundaTabla);
  
  x=$("#abrirArchivo");
  x.click(abriraarchivo);
 
}

function abriraarchivo()
{
   var x=$("#prueba");
   x.text("si esta aca");
   
   var file = fopen("myFile.txt", 0);
   
   x.innerText(file);

}

function presionParrafoDocumento()
{
  alert('se presionó un párrafo del documento');
}

function presionpresionParrafoSegundaTabla()
{
  alert('se presionó un párrafo contenido en la segunda tabla.');
}