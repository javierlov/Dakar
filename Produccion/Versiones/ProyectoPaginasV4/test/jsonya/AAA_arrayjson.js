var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$("#btnjq");
  x.click(presionBoton)

  x=$("#boton1");
  x.click(mostrarConversion);
  
  x=$("#btnleertxt");
  x.click(processFiles);
  
  x=$("#btnAddLink");
  x.click(AddLink);  
  
}

function presionBoton()
{
	var x=$("#datos");
	x.text(jsSTRINGIFY());
}

function ejemplo()
{
	var arr = ["a", "b", "c"];
	var str = JSON.stringify(arr);
	document.write(str);
	document.write ("<br/>");

	var newArr = JSON.parse(str);

	while (newArr.length > 0) {
		document.write('dos ' + newArr.pop() + "<br/>");
	}

}

function llegadaDatos(datos)
{
 $("#Cargadatos").html("one:"+datos.one+datos.two);
}

function processFiles(files) {

	//ajaxjsonOK();
	
	leerjson( "xdata.json", 
		function( data ) {
		var items = [];
		$.each( data, function( key, val ) {
		items.push( "<li id='" + key + "'>" + val + "</li>" );
		});

	$( "<ul/>", {
	"class": "my-new-list",
	html: items.join( "" )
	}).appendTo( "body" );
	});
}

function AddLink()
{
    //identify selected text
    var sText = document.selection.createRange();
    if (sText.text != "")
    {
      //create link
      document.execCommand("CreateLink");
      //change the color to indicate success
      if (sText.parentElement().tagName == "A")
      {
        sText.execCommand("ForeColor",false,"#FF0033");
      }
    }
    else
    {
        alert("Please select some text!");
    }   
}

function procesarOpenFile(cadenajson)
{
	var contact = JSON.parse(cadenajson);
	var res=$("#resultados");  
	var textos = '';	
	for(i=0; i < contact.poblacion.length; i++)
	{
		textos += (contact.poblacion[i].id + ", " + contact.poblacion[i].nombre);	
		textos += ('<br>');
	}		
	res.text(textos);
}

function mostrarConversion(e)
{
	var cadenajson = '{"poblacion":[{"id":"10","nombre":"Alcobendas 10"},{"id":"11","nombre":"MirafloresdelaSierra"},{"id":"12","nombre":"SanFernandodeHenares"}]}';
		
	var contact = JSON.parse(cadenajson);
	var res=$("#resultados");  
	var textos = '';
	
	for(i=0; i < contact.poblacion.length; i++)
	{
		textos += (contact.poblacion[i].id + ", " + contact.poblacion[i].nombre);	
		textos += ('<br>');
	}
		
	res.text(textos);
	/*
	var obj= '{"nombre":"juan","edad":"25","sueldos":1200}';  
	var jsontext = '{"firstname":"Jesper","surname":"Aaberg","phone":["555-0100","555-0120"]}';
	var contact = JSON.parse(jsontext);
	document.write(contact.surname + ", " + contact.firstname);
	*/	
	
	/*
		var contact = JSON.parse(obj);	
		
		var tot = contact.length;
		
		for(i=0; i <  1;i++)
		{
			res.text(contact.nombre + ' - ' + contact.edad + ' - ' + contact.sueldos);    
		}
	*/
	
	/*	
	var dat = '';
	
	while (datosr.length > 0) {
		dat +='dos ' + datosr.pop() + "<br/>";
	}
	res.text(dat);    
  */
}

function jsSTRINGIFY(){

	var continents = new Array();
	continents[0] = "Europe";
	continents[1] = "Asia";
	continents[2] = "Australia";
	continents[3] = "Antarctica";
	continents[4] = "North America";
	continents[5] = "South America";
	continents[6] = "Africa";

	var jsonText = JSON.stringify(continents, replaceToUpper);
	
	return (jsonText);
}

function replaceToUpper(key, value) {
    return value.toString().toUpperCase();
}

function procesarEventos(texto)
{ 
  
  var x=$("#resultados");  
  x.text('Segunda parte = ' + texto);    

  var datos=texto;
  var salida='';
	
	var jsonText = JSON.stringify(datos, replaceToUpper);
	
	x.text(salida);
	   
  if(salida=='') 
  {
    resultados.innerHTML = "no salio...";
  }

}

