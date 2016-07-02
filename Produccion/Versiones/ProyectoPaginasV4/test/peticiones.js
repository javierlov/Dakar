//Función para encapsular la detección del objeto que tenemos que usar para AJAX inter-dominios, según el navegador en el que estemos.
function createCorsObject(){

	//Inicialmente creamos XHR
	var xhrObject = new XMLHttpRequest();
    //comprobamos si XHR tiene capacidades CORS o es el antiguo
    if ("withCredentials" in xhrObject){
        return xhrObject;
    }
    //si es el antiguo, comprobamos si el navegador soporta el objeto XDR
    else if (typeof XDomainRequest != "undefined"){
         xhrObject = new XDomainRequest();
    } else {
		xhrObject = null;
    }
	return xhrObject;  
}  

function inicioobject()
{
	//obtenemos un objeto para AJAX cross-dominio  
	var xhrObject = createCorsObject();

	//si tenemos un objeto válido...
	  //resp["Access-Control-Allow-Origin"] = "*"
	if (xhrObject){  
		//definimos los parámetros de la petición HTTP  
		xhrObject.open("get", "TestGetData.html");	  
		//definimos un callback para tratar los datos que recibamos  
		xhrObject.onload = function(){  
			alert(xhrObjet.responseText)  
		};	  
		//definimos un callback para tratar el caso de error  
		xhrObject.onerror = function(){  
			alert("error");
			return false;
			// código para caso de error  
		};	  
		//Enviamos la petición  
		xhrObject.send();  
	}
}