var arraydatosglobal;

function CargaGrilla(pagina){
	console.clear();
	console.log("cargo");
	
	var IDdivResultado = "grilladatos";
	var funcionBusca = "Paginado";
	var FuncionFooter = "CargaGrilla";
	
	BuscarGrillaHTML(IDdivResultado, funcionBusca, FuncionFooter, pagina)
}
//--------------------------------------------------------------------------------
function ArrayDatosHTML(){
	var pagefunciones = "/struct/funciones_ajax.php";
	var strparametros = "funcion=ArrayDatosJSON";
	var IDdivResultado = "listado";	
	
	return ProcesarDatosJSON(pagefunciones, strparametros, IDdivResultado);			
}

function RecorrerArrayDatos(){
	var valorJSON = ArrayDatosHTML();
	var datosSTR = JSON.parse(valorJSON);
	var result  = '';
	
	if(datosSTR.length == 0){
		return '';
	}
	
	for (var i=0; i < datosSTR.length; i++){	
		if(i==0)
			result  += '"'+datosSTR[i].id+'"';
		else
			result  += ', "'+datosSTR[i].id+'"';
	}
	return '['+result+']';
}
//--------------------------------------------------------------------------------
function BuscarGrillaHTML(IDdivResultado, funcionBusca, FuncionFooter, pagina){

	var pagefunciones = "/struct/funciones_ajax.php";
	
	var strparametros = "funcion="+funcionBusca+ 
				"&FuncionFooter="+FuncionFooter+
				"&pagina="+encodeURIComponent(pagina);
		
	ProcesarDatos(pagefunciones, strparametros, IDdivResultado);			
}
//--------------------------------------------------------------------------------
function ArrayDatos(){
	var resultado = '';
	for(i=0; i < document.forms[0].elements.length; i++){
		if(document.forms[0].elements[i].type == 'checkbox'){
			resultado.push(document.forms[0].elements[i].id);
		}
	}
	
	arraydatosglobal = ActualizaArrayDatos(resultado, opc);
}

function ActualizaArrayDatos(idelemento, opc){
	var newarray;
	for(i in arraydatosglobal){
		if(arraydatosglobal[i] == idelemento){
			if(opc == 'INS')
				newarray.push(arraydatosglobal[i]);
			else if(opc != 'DEL')
				newarray.push(arraydatosglobal[i]);
		}
	}
	
	return  newarray;
}

function RetornaArrayDatos(){
	var resultado = '';
	for(i=0; i < document.forms[0].elements.length; i++){
		if(document.forms[0].elements[i].type == 'checkbox'){
			resultado += "Value: " +document.forms[0].elements[i].value +  " - ";
			resultado += ". type: " +document.forms[0].elements[i].type +  " - ";
			resultado += ". id: " +document.forms[0].elements[i].id +  " - ";
			resultado += ". check: " +document.forms[0].elements[i].checked +  " - ";
			resultado += ". name: " +document.forms[0].elements[i].name +  "<p>";
		}
	}
	
	writedivformu(resultado);
}

function writedivformu(texto){	
	divelement = document.getElementById("listado"); 
	divelement.innerHTML = texto;
}

//--------------------------------------------------------------------------------