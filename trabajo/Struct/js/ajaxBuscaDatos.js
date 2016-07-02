function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
//--------------------------------------------------------------------------------
function ProcesarDatos(pagefunciones, strparametros, IDdivResultado){	
	//ActivaGif();
	
	var divResultado = document.getElementById(IDdivResultado);
	var resultadoDatos = 'FALLO. Intente nuevamente.';
	divResultado.innerHTML = 'Iniciando... ';					
	ajax=objetoAjax();	
	try {
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4) {			
				if (ajax.status == 200){				
					var grillahtml = ajax.responseText;															
					resultadoDatos = 'OK';				
					divResultado.innerHTML = grillahtml;												
				}
				else{
					divResultado.innerHTML='Error '+ ajax.statusText; 				
				}
			}
			else{
				divResultado.innerHTML = 'Procesando... ';					
			}		
		}	
		
		console.log(pagefunciones+'?'+strparametros);
		
		ajax.open("GET", pagefunciones+'?'+strparametros,false); 
		ajax.send(null);						
	}
    catch(e) {			
		divResultado.innerHTML = "Error. " + e.message + " ";;					
		//DesctivaGif();
		return false;
	}
	
	if(resultadoDatos.trim() == 'OK'){
		//divResultado.innerHTML = '';												
		//DesctivaGif();
		return true;
	}else{
		divResultado.innerHTML = resultadoDatos.trim();
		//MostrarError('', '', $('#'+IDdivResultado), resultadoDatos);		
		//DesctivaGif();
		return false;
	}
}
//--------------------------------------------------------------------------------
function ProcesarDatosJSON(pagefunciones, strparametros, IDdivResultado){	
	
	var divResultado = document.getElementById(IDdivResultado);
	var resultadoDatos = 'FALLO (JSON) Intente nuevamente.';
	divResultado.innerHTML = 'Iniciando... ';					
	ajax=objetoAjax();	
	try {
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4) {			
				if (ajax.status == 200){				
					var JSONresult = ajax.responseText;															
					resultadoDatos = 'OK';				
				}
				else{
					divResultado.innerHTML='Error '+ ajax.statusText; 				
				}
			}
			else{
				divResultado.innerHTML = 'Procesando... ';					
			}		
		}	
		
		console.log(pagefunciones+'?'+strparametros);
		
		ajax.open("GET", pagefunciones+'?'+strparametros,false); 
		ajax.send(null);						
	}
    catch(e) {			
		divResultado.innerHTML = "Error. " + e.message + " ";;					
		return '';
	}
	
	if(resultadoDatos.trim() == 'OK'){
		divResultado.innerHTML = '';												
		return JSONresult;
	}else{
		divResultado.innerHTML = resultadoDatos.trim();
		return '';
	}
}