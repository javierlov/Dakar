var x;
x=$(document);
x.ready(inicializarEventos);
	
function inicializarEventos()
{	
	var Objetivos = [
	"1 Crear un Nuevo Proyecto",
	"2 Hacer Mis Tareas",
	"3 Agenda Tareas ",
	"4 Evaluar Tareas",
	"5 Estadisticas",
	"6 Votaciones",
	"7 Configuraciones"]; 			
	FormatoInformeTexto("Ayudas / Como Uso PaginArg", Objetivos);
	
	var Objetivos = [
	"Aca se explicaria como crear un proyecto",
	"Paso 1...",
	"Paso 2",
	"Paso 3",
	"Paso 4",
	"Paso 5"]; 			
	FormatoInformeTexto("1 Crear un Nuevo Proyecto", Objetivos);	
	
	var Objetivos = [
	"Aca se explicaria como usar Hacer Mis Tareas",
	"Paso 1...",
	"Paso 2",
	"Paso 3",
	"Paso 4",
	"Paso 5"]; 			
	FormatoInformeTexto("2 Link - Hacer Mis Tareas", Objetivos);	
}
