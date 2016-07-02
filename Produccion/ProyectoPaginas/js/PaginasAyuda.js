var x;
x=$(document);
x.ready(inicializarEventos);
	
function inicializarEventos()
{	
	var Objetivos = [
	"1 Como puedo utilizar PaginArg : " + "<a href='InicioAyudaComoUso.html'>Detalles</a>",
	"2 Como crear nuevos Proyectos PaginArg"  + "<a href='InicioAyudaComoUso.html'>Detalles</a>",
	"3 Tecnologias utilizadas en el diseño de PaginArg "  + "<a href='InicioAyudaComoUso.html'>Detalles</a>",
	"4 Posibles usos de PaginArg"  + "<a href='InicioAyudaComoUso.html'>Detalles</a>",
	"5 Tipos de paginas PaginArg"  + "<a href='InicioAyudaComoUso.html'>Detalles</a>",
	"5 Ejemplos PaginArg"  + "<a href='InicioAyudaComoUso.html'>Detalles</a>"]; 	
		
	FormatoInformeTexto("Ayudas", Objetivos);
		
}
