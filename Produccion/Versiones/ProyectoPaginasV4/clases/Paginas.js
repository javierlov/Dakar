//----------------------------------------------------------		
  ArrayTipoPagina = new Array('General','Indice', 'Texto','Imagen');
//----------------------------------------------------------   
	// define la clase Pagina
	function Pagina(x) {
		this.attPagina=0;
		this.titulo = 'General'; //titulo de la pagina
		this.unidad = 'General'; //unidad de la materia
		this.numero = x;//numero de pagina
		this.puntaje = 1;//puntaje para evaluacion	  
		this.tipo = 'General';
				
		Pagina.prototype.GetTipo = function(){
			return (this.tipo);
		};
		 
		Pagina.prototype.SetNumero = function(numero){
			this.numero = numero;
		};
		 
		Pagina.prototype.ImprimeInfo = function(){
			var info = '';
			info = 'Titulo='+this.titulo;
			info += '; Unidad='+this.unidad;
			info += '; Numero='+this.numero;
			info += '; Puntaje='+this.puntaje;
			info += '; Tipo='+this.tipo;
			return (info)
		};
	 };
//----------------------------------------------------------	   	
		// define la clase PaginaIndice
		function PaginaIndice(x) {
		  // Llama al constructor primario
			Pagina.call(this,x);		  
			this.numero = 0;//numero de pagina
			this.titulo = 'Sin titulo';
			this.tipo = 'Texto-Texto-Texto';					
		};		
										
		// hereda PaginaIndice
		PaginaIndice.prototype = new Pagina();
				
		// corrige el puntero del constructor porque apunta a PaginaIndice
		PaginaIndice.prototype.constructor = PaginaIndice;
		
//----------------------------------------------------------	   	
		// define la clase PaginaTexto
		function PaginaTexto(x) {
		  // Llama al constructor primario
		  Pagina.call(this, x);
		  this.numero = 0;//numero de pagina
		  this.tipo = 'Texto-Imagen-Texto';
		}	
		
		// hereda PaginaTexto
		PaginaTexto.prototype = new Pagina();
		
		// corrige el puntero del constructor porque apunta a PaginaTexto
		PaginaTexto.prototype.constructor = PaginaTexto;
		   
//----------------------------------------------------------   
	
