CI_Slides = {
   
   //ArrayTipoPagina = new Array('General','Indice', 'Texto','Imagen');
//----------------------------------------------------------   
	// define la clase Pagina
	function Pagina() {
	this.attPagina=attPagina;
	  this.titulo = 'General'; //titulo de la pagina
	  this.unidad = 'General'; //unidad de la materia
	  this.numero = 0;//numero de pagina
	  this.puntaje = 1;//puntaje para evaluacion	  
	 }
	 
	 Pagina.prototype.ImprimeInfo = function(){
	  var info = '';
		info = 'Titulo='+this.titulo;
		info += ';Unidad='+this.unidad;
		info += ';Numero='+this.numero;
		info += ';Punta
	};
//----------------------------------------------------------	
   Pagina : function (attPagina) {
	  this.attPagina=attPagina;
	  this.titulo = 'General'; //titulo de la pagina
	  this.unidad = 'General'; //unidad de la materia
	  this.numero = 0;//numero de pagina
	  this.puntaje = 1;//puntaje para evaluacion
	  
	  //this.tipo = ArrayTipoPagina[0]; //Tipo de pagina esto define el comportamiento
	  
	  this.GetTitulo = function(){
		return (this.titulo)
	  }
	  
	  this.ImprimeInfo = function(){
		var info = '';
		info = 'Titulo='+this.titulo;
		info += ';Unidad='+this.unidad;
		info += ';Numero='+this.numero;
		info += ';Puntaje='+this.puntaje;
		return (info)
	  }
   },

   Estilos : {
	   PaginaIndice : function (attPaginaTexto, attPagina) {
			CI_Slides.Pagina.call(this,attPagina);
			this.attPagina=attPaginaTexto;
			this.numero = 0;
			this.numero = 0;
			this.titulo = 'Indice';
			
	   },
	   
	   PaginaTexto : function (attPaginaTexto, attPagina) {
			CI_Slides.Pagina.call(this,attPagina);
			this.attPagina=attPaginaTexto;
			this.numero = 10;
			this.puntaje = 10;
			this.titulo = 'Texto';
			
			this.ImprimeInfo = function(){
				var info = this.ImprimeInfo.call();				
			return (info);
		}
	   },
	   
	   PaginaImagen : function (attPaginaTexto, attPagina) {
			CI_Slides.Pagina.call(this,attPagina);
			this.attPagina=attPaginaTexto;
			this.numero = 11;
			this.puntaje = 40;
			this.titulo = 'Imagen';
			
			this.SetNumero = function(num){
				this.numero = num;
			}
	   }
	}
}