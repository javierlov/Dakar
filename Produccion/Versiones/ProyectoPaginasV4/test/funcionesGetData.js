var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$("#enviar");
  x.click(presionSubmit);
  
  x=$("#xmlbutton");
  x.click(leerxml);

  x=$("#xmlbuttonarch");
  x.click(leerarchivoxml); 
  
  x=$("#botonOpen");
  x.click(abrirpagina); 
 
	x=$("#xmldesdearchivo");
	x.click(xmldesdearchivo); 

}

function presionSubmit()
{
  var v=$("#nro").attr("value");
  $.get("pagina1.php",{numero:v},llegadaDatos); 
  return false;
}

function llegadaDatos(datos)
{
  alert(datos);
}

function leerxml()
{
	var xml = "<rss version='2.0'><channel><title>RSS Title</title></channel></rss>",
	  xmlDoc = $.parseXML( xml ),
	  $xml = $( xmlDoc ),
	  $title = $xml.find( "title" );
	 
	// Append "RSS Title" to #someElement
	$( "#someElement" ).append( $title.text() );
	 
	// Change the title to "XML Title"
	$title.text( "XML Title" );
	 
	// Append "XML Title" to #anotherElement
	$( "#anotherElement" ).append( $title.text() );
}

function xmldesdearchivo()
{
	alert("TestGetData.html");
	
	$.ajax({
        type: "GET",
		url: "datosxml.xml",
		dataType: "xml",
		success: function(xmldata) {			
			//alert(xmldata);
			$(xml).find('Title').each(function(){
				  var sTitle = $(this).find('Title').text();
				  var sPublisher = $(this).find('Publisher').text();
				  $("<li></li>").html(sTitle + ", " + sPublisher).appendTo("#ContentArea ul");
				});
	}
});
}

function leerarchivoxml()
{
	var xml = "datosxml.xml",
	  xmlDoc = $.parseXML( xml ),
	  $xml = $( xmlDoc ),
	  $title = $xml.find( "title" );
	 
	// Append "RSS Title" to #someElement
	$( "#someElement" ).append( $title.text() );
	 
	// Change the title to "XML Title"
	$title.text( "XML Title" );
	 
	// Append "XML Title" to #anotherElement
	$( "#anotherElement" ).append( $title.text() );
}


function perimitirCrossDomain(req, res, next) {
  //en vez de * se puede definir SÓLO los orígenes que permitimos
  res.header('Access-Control-Allow-Origin', '*');
  //metodos http permitidos para CORS
  res.header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
  res.header('Access-Control-Allow-Headers', 'Content-Type');
  next();
}

function abrirpagina()
{
	var xdrObject = new XDomainRequest();
	xdrObject.open("get", "TestGetData.html");
	
	xdrObject.withCredentials = true;
	xdrObject.responseText = "Access-Control-Allow-Origin: *"

	xdrObject.onload = function(){
	   alert(xdrObject.responseText)
	};
	xdrObject.send(null);
}