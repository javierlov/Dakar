var x;
x=$(document);
x.ready(inicializarEventos);
/*
<input type="button" value="AlmacenaValor"/>
<input type="button" value="RecuperarValor"/>
<input type="button" value="EliminarValor"/>
<input type="button" value="BorrarValor"/>
*/
function inicializarEventos()
{
  var x;  
  
  x=$("#AlmacenaValor");
  x.click(AlmacenaValor);
  
  x=$("#RecuperarValor");
  x.click(RecuperarValor);
  
  x=$("#EliminarValor");
  x.click(EliminarValor);
  
  x=$("#BorrarValor");
  x.click(BorrarValor);  
  
  x=$("#Consulta");
  x.click(Consulta); 

  x=$("#boton1");
  x.click(extraerTexto);  
  
  x=$("#CrearBase");
  x.click(CrearBase);  
  
  x=$("#InsertData");
  x.click(InsertData);  

  x=$("#InsertValues");
  x.click(InsertValues);  
  
  x=$("#ConsultaValores");
  x.click(ConsultaValores);  
  
  x=$("#CrearBaseInsertDatos");
  x.click(CrearBaseInsertDatos);  
  
  x=$("#ConsultaValoresPROD");
  x.click(ConsultaValoresPROD);  
}

function ConsultaValoresPROD()
{
	var out=$("#texta");  				
	var resultados='';
		
	var db = openDatabase('DBPrueba', '1.0', 'DataBaseTest', 2 * 1024 * 1024);
		
	db.transaction(function (tx) {
		tx.executeSql('SELECT * FROM PRODUCTOS', [], 
		
		function (tx, results) {
		   var len = results.rows.length, i;
		   msg = "<p>Found rows: " + len + "</p>";
		   document.querySelector('#status').innerHTML +=  msg;
		   
		   for (i = 0; i < len; i++){		
			  resultados += results.rows.item(i).log  + '\n' ;
		   }
		   
		   out.text(resultados);
		 }, null);
	});
}

function CrearBaseInsertDatos()
{
	var out=$("#texta");  				
	var resultados='Resultados \n';
	
	var db = openDatabase('DBPrueba', '1.0', 'DataBaseTest', 2 * 1024 * 1024);
	var msg;
	db.transaction(function (tx) {
	  tx.executeSql('CREATE TABLE IF NOT EXISTS PRODUCTOS (id unique, log)');
	  tx.executeSql('INSERT INTO PRODUCTOS (id, log) VALUES (1, "foobar")');
	  tx.executeSql('INSERT INTO PRODUCTOS (id, log) VALUES (2, "logmsg")');
	  tx.executeSql('INSERT INTO PRODUCTOS (id, log) VALUES (3, "foobar3")');
	  tx.executeSql('INSERT INTO PRODUCTOS (id, log) VALUES (4, "logmsg4")');
	  tx.executeSql('INSERT INTO PRODUCTOS (id, log) VALUES (5, "foobar5")');
	  tx.executeSql('INSERT INTO PRODUCTOS (id, log) VALUES (6, "logmsg6")');
	  
	  msg = '<p>Log message created and row inserted.</p>';
	  document.querySelector('#status').innerHTML =  msg;
	});

	db.transaction(function (tx) {
	  tx.executeSql('SELECT * FROM PRODUCTOS', [], 
		function (tx, results) {
			var len = results.rows.length, i;
			msg = "<p>Found rows: " + len + "</p>";
			document.querySelector('#status').innerHTML +=  msg;
			
		   for (i = 0; i < len; i++){
			 msg = "<p><b>" + results.rows.item(i).log + "</b></p>";
			 document.querySelector('#status').innerHTML +=  msg;
		   }		   
		   out.text(resultados);		   
		 }, null);
		});
}

function ConsultaValores()
{
	var out=$("#texta");  				
	var resultados='';
	
	var db = openDatabase('mydb', '1.0', 'Test DB', 2 * 1024 * 1024);
	db.transaction(function (tx) {
	   tx.executeSql('CREATE TABLE IF NOT EXISTS LOGS (id unique, log)');
	   tx.executeSql('INSERT INTO LOGS (id, log) VALUES (1, "foobar")');
	   tx.executeSql('INSERT INTO LOGS (id, log) VALUES (2, "logmsg")');
	});
	db.transaction(function (tx) {
	   tx.executeSql('SELECT * FROM LOGS', [], function (tx, results) {
	   var len = results.rows.length, i;
	   msg = "<p>Found rows: " + len + "</p>";
	   document.querySelector('#status').innerHTML +=  msg;
	   
	   for (i = 0; i < len; i++){
		  //alert(results.rows.item(i).log );		  
		  resultados += results.rows.item(i).log  + '\n' ;
	   }
	   out.rows="8";
	   out.text(resultados);
	 }, null);
	});
}

function InsertValues()
{
	var cl=$("#clave1");	
	var vl=$("#valor1"); 
	var e_id = vl.val();
	var e_log = cl.val();
	
	var db = openDatabase('mydb', '1.0', 'Test DB', 2 * 1024 * 1024);
	db.transaction(function (tx) {  
	  tx.executeSql('CREATE TABLE IF NOT EXISTS LOGS (id unique, log)');
	  tx.executeSql('INSERT INTO LOGS (id,log) VALUES (?, ?)', [e_id, e_log]);
	  /////tx.executeSql('INSERT INTO LOGS (id,log) VALUES (3, "lomito")');
	});
}

function InsertData()
{
	var db = openDatabase('mydb', '1.0', 'Test DB', 2 * 1024 * 1024);
	db.transaction(function (tx) {
	   tx.executeSql('CREATE TABLE IF NOT EXISTS LOGS (id unique, log)');
	   tx.executeSql('INSERT INTO LOGS (id, log) VALUES (1, "foobar")');
	   tx.executeSql('INSERT INTO LOGS (id, log) VALUES (2, "logmsg")');
	});
}

function CrearBase(){
	var db = openDatabase('mydb', '1.0', 'Test DB', 2 * 1024 * 1024);
	db.transaction(function (tx) {  
	   tx.executeSql('CREATE TABLE IF NOT EXISTS LOGS (id unique, log)');
	});
}

function extraerTexto()
{
  var x=$("#parrafo1");
  alert(x.text());
}

function Consulta()
{
	var cl=$("#clave1");	
	var vl=$("#valor1");  				
	alert("clave (" + cl.val() + ") valor =" + vl.val());
}

//Almacenar un valor: window.localStorage.setItem(keyinput,valinput)
function AlmacenaValor()		
{
	var cl=$("#clave1");	
	var vl=$("#valor1");  				
			
	var keyinput = cl.val();
	var valoutput = vl.val();
	
	if(typeof(window.localStorage) != 'undefined'){ 
		window.localStorage.setItem(keyinput,valoutput); 
	} 
	else{ 
		throw "window.localStorage, not defined"; 
	}
}		
//Recuperar un valor: window.localStorage.getItem (keyinput);
function RecuperarValor()		
{
	var cl=$("#clave1");	
	var vl=$("#valor1");  				
	var out=$("#output_area");  				
	
	var valoutput ;
	if(typeof(window.localStorage) != 'undefined'){ 
		valoutput = window.localStorage.getItem (cl.val()); 
		out.text(valoutput);
	} 
	else{ 
		throw "window.localStorage, not defined"; 
	}
}		
//Eliminar un valor: window.localStorage.removeItem(keyinput);
function EliminarValor()		
{
	var cl=$("#clave1");	
	var vl=$("#valor1");  				

	var valoutput ;
	if(typeof(window.localStorage) != 'undefined'){ 
		valoutput = window.localStorage. removeItem (cl.val()); 
	} 
	else{ 
		throw "window.localStorage, not defined"; 
	}
}		
//Borrar todos los valores: window.localStorage.clear()
function BorrarValor()		
{
	var cl=$("#clave1");	
	var vl=$("#valor1");  				

	if(typeof(window.localStorage) != 'undefined'){ 
		window.localStorage.clear() ;
	} 
	else{ 
		throw "window.localStorage, not defined"; 
	}
}		