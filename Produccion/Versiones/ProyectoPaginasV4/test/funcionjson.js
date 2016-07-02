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
  
  x=$("#ajaxjsonOK");
  x.click(ajaxjsonOK);
  
  x=$("#ajaxjson");
  x.click(ajaxjson);
  
  x=$("#CadenaJsonOK");
  x.click(Copiaajaxjson);

}

function leerajax()
{
	$.ajax({
	  type: "GET",
	  url: "xdata.json",
	  dataType: "script"
	});
}


function Copiaajaxjson()
{

	$.getJSON( "Data/Proyectos/xTarea.json", 
		function( data ) {
			var items = [];
			$.each( data, 
				function( key, val ) {
					items.push( "<li id='" + key + "'>" + val + "</li>" );
				});
			$( "<ul/>", {
				"class": "my-new-list",
				html: items.join( "" )
			}).appendTo( "body" );
		});
}


function ajaxjson()
{

	$.getJSON( "xdata.json", 
		function( data ) {
			var items = [];
			$.each( data, 
				function( key, val ) {
					items.push( "<li id='" + key + "'>" + val + "</li>" );
				});
			$( "<ul/>", {
				"class": "my-new-list",
				html: items.join( "" )
			}).appendTo( "body" );
		});
}

function presiontxt()
{
  $.getJSON("myfile.txt",llegadaDatos); 
  return false;
}

function setHeader(xhr) {
 xhr.setRequestHeader('Authorization', 'Access-Control-Allow-Origin: *'); 

}


function presionSubmit()
{ 
  $.getJSON("xdata.json",llegadaDatos); 
  return false;
}

function llegadaDatos(datos)
{
 $("#resultados").html("one:"+datos.one+datos.two);
}