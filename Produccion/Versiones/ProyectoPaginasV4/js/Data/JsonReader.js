function CargarTarea(codigo)
{
	var filejson = "Proyectos/Tareas/xTarea.json";
	var x;
	x=$("#tajaxjsonOK");
	var pfilejson = x.val();
	
	$.getJSON(pfilejson, 
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

/*************************************************/
function leerjson(archivojson, funcion)
{	
	$.getJSON( archivojson, funcion); 	
}

function Json_a_Array(cadenajson)
{
	alert('leer json');
	var resultado = JSON.parse(cadenajson);
	return(resultado);
}

function CadenaJsonOK()
{
	alert('CadenaJsonOK');

	$.getJSON( "xdata.json", 
		function( data ) {
			var resultado = JSON.parse(data);
			return(resultado);
		});
}

function ajaxjsonOK()
{
	var filejson = "Data/xTarea.json";
	var x;
	x=$("#tajaxjsonOK");
	var pfilejson = x.val();
	
	$.getJSON(pfilejson, 
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