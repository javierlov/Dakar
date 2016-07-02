//----------------------------------------------------------   
	// define la clase Proyecto
	function Proyecto(idProyecto) {
		this.IDProyecto=idProyecto;
		this.materia = 'Sin nombre'; //nombre de la materia
		this.tituloProyecto = 'Titulo del proyecto'; //titulo de la Proyecto		
		this.numeroProyecto = 1;//numero de Proyecto				
		this.ArrayProyectos = []; //contine Tareas
				
		Proyecto.prototype.AgregarProyecto = function(p){
			this.ArrayProyectos.push(p);
		};		 
		
		Proyecto.prototype.MostrarProyectos = function(){
			return(this.ArrayProyectos);
		};		 

	 };
	
//----------------------------------------------------------	   	
