var dataset;
var results = document.getElementById('results'); 
var id = document.getElementById('id');
var firstName = document.getElementById('firstName');  
var lastName = document.getElementById('lastName');  
var phone = document.getElementById('phone');

function InicializarDB()
{
	var CREATE_TABLATAREAS = "CREATE TABLE IF NOT EXISTS Tareas (IDTAREA INTEGER PRIMARY KEY AUTOINCREMENT, Titulo TEXT, Unidad TEXT, Numero INTEGER, Puntaje INTEGER, Materia TEXT, FehcaEntrega TEXT, FehcaCreacion TEXT, TipoTarea INTEGER)";
	var SELECT_TABLATAREAS = "SELECT * FROM Tareas";
	var INSERT_TABLATAREAS = "INSERT INTO Tareas (firstName, lastName, phone) VALUES (?, ?, ?)";
	var UPDATE_TABLATAREAS = "UPDATE Tareas SET firstName = ?, lastName = ?, phone = ? WHERE id = ?";
	var DELETE_TABLATAREAS = "DELETE FROM Tareas WHERE id=?";
	var ELIMINAR_TABLATAREAS = "DROP TABLE Tareas";

	var CREATE_TABLAPAGINAS = "CREATE TABLE IF NOT EXISTS PAGINAS(IDPAGINA INTEGER PRIMARY KEY AUTOINCREMENT, IDTAREA INTEGER, Titulo TEXT, Unidad TEXT, Numero INTEGER, Puntaje INTEGER, Materia TEXT, FehcaEntrega TEXT, FehcaCreacion TEXT, TipoPagina INTEGER)";
	var SELECT_TABLAPAGINAS = "SELECT * FROM PAGINAS";
	var INSERT_TABLAPAGINAS = "INSERT INTO PAGINAS (firstName, lastName, phone) VALUES (?, ?, ?)";
	var UPDATE_TABLAPAGINAS = "UPDATE PAGINAS SET firstName = ?, lastName = ?, phone = ? WHERE id = ?";
	var DELETE_TABLAPAGINAS = "DELETE FROM PAGINAS WHERE id=?";
	var ELIMINAR_TABLAPAGINAS = "DROP TABLE PAGINAS";
		
	var CREATE_TABLAPROYECTOS = "CREATE TABLE IF NOT EXISTS PROYECTOS (IDTAREA INTEGER PRIMARY KEY AUTOINCREMENT, Tituelo TEXT, Unidad TEXT, Numero INTEGER, Puntaje INTEGER, Materia TEXT, FehcaEntrega TEXT, FehcaCreacion TEXT, TipoTarea INTEGER)";
	var SELECT_TABLAPROYECTOS = "SELECT * FROM PROYECTOS";
	var INSERT_TABLAPROYECTOS = "INSERT INTO PROYECTOS (firstName, lastName, phone) VALUES (?, ?, ?)";
	var UPDATE_TABLAPROYECTOS = "UPDATE PROYECTOS SET firstName = ?, lastName = ?, phone = ? WHERE id = ?";
	var DELETE_TABLAPROYECTOS = "DELETE FROM PROYECTOS WHERE id=?";
	var ELIMINAR_TABLAPROYECTOS = "DROP TABLE PROYECTOS";
	
	var db = openDatabase("ProyectoPaginas", "1.0", "DB Proyecto Tareas Paginas", 200000);
	createTable(CREATE_TABLATAREAS);
	createTable(CREATE_TABLAPAGINAS);
	createTable(CREATE_TABLAPROYECTOS);
 }
 
	function onError(tx, error) {
		alert(error.message);
	}
      
	function showRecords() {
		results.innerHTML = '';
		db.transaction(function(tx) {
		  tx.executeSql(SELECT_TABLATAREAS, [], function(tx, result) {
		dataset = result.rows;
			for (var i = 0, item = null; i < dataset.length; i++) {
			  item = dataset.item(i);
			  results.innerHTML += 
				  '<li>' + item['lastName'] + ' , ' + item['firstName'] + ' <a href="#" onclick="loadRecord('+i+')">edit</a>  ' +  
		'<a href="#" onclick="deleteRecord('+item['id']+')">delete</a></li>';
		}
	  });
	});
	}

	function createTable(TABLA_DESCRIPCION) { 
	db.transaction(function(tx) {
	  tx.executeSql(TABLA_DESCRIPCION, [], showRecords, onError);
	});
	}

	function insertRecord() {
	db.transaction(function(tx) {
	  tx.executeSql(INSERT_TABLATAREAS, [firstName.value, lastName.value, phone.value], loadAndReset, onError);
	});
	}

	function loadRecord(i) {
		var item = dataset.item(i); 
		firstName.value = item['firstName'];
		lastName.value = item['lastName'];
		phone.value = item['phone'];
		id.value = item['id']; 
	}
 
	function updateRecord() {
		db.transaction(function(tx) {
		  tx.executeSql(UPDATE_TABLATAREAS, [firstName.value, lastName.value, phone.value, id.value], loadAndReset, onError);
		}); 
	}

	function deleteRecord(id) {
		db.transaction(function(tx) {
		  tx.executeSql(DELETE_TABLATAREAS, [id], showRecords, onError);
		});
		resetForm();
	}

	function dropTable() {
		db.transaction(function(tx) {
		  tx.executeSql(ELIMINAR_TABLATAREAS, [], showRecords, onError);
		});
		resetForm();
	}

	function loadAndReset(){
		resetForm();
		showRecords();
	}

	function resetForm(){
		firstName.value = '';
		lastName.value = '';
		phone.value = '';
		id.value = ''; 
	}