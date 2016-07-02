//----------------------------------------------------------   
	// define la clase Tarea
	function Tarea(idTarea) {
		this.IDTarea=idTarea;
		this.titulo = 'General'; //titulo de la Tarea
		this.unidad = 'General'; //unidad de la materia		
		this.numero = 1;//numero de Tarea
		this.puntaje = 1;//puntaje para evaluacion	  
		this.tipo = 'General';
		this.PaginaIndice;
		this.PaginaEvaluacion;
		this.ArrayTareas = []; //Contiene paginas
				
		Tarea.prototype.AgregarTarea = function(p){
			this.ArrayTareas.push(p);
		};		 
		
		Tarea.prototype.MostrarTareas = function(){
			return(this.ArrayTareas);
		};		 

	 };
	
//----------------------------------------------------------	   	
