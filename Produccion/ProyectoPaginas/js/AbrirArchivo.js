$(document).ready(function(){
// Verificamos el sopor te de la API de Archivos, es necesario que soporte las 4 funciones.
	if (window.File && window.FileReader && window.FileList && window.Blob) {
			function handleFileSelect(evt) {var files = evt.target.files; 		
// Objeto para Lista de Archivos, en el objeto existen los datos del archivo		
		var output = [];
//Creamos un arreglo para guardar todos los archivos datos en diferentes posiciones.
		for (var i = 0, f; f = files[i]; i++) {
//Recorremos el objeto files para obtener los datos de cada archivo y guardarlos en el arreglo.
		  output.push('<li><strong>', f.name, '</strong> (', f.type || 'n/a', ') - ',
					  f.size, ' bytes, ultima modificacion: ',
					  f.lastModifiedDate.toLocaleDateString(), '</li>');
		}
		document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
//Introducimos la lista de archivos entre las etiquetas <ul></ul>
	  }
	  document.getElementById('files').addEventListener('change', handleFileSelect, false);
//Ponemos un listener para escuchar cuando el evento Change del input file se ejecute, quiere decir cuando se de click en "Abrir"
	} 
	else {
	  alert('Tu navegador no tiene soporte para estas funciones.');
	}
});