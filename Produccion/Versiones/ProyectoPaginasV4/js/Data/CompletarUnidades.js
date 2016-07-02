var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{	
	var x=$("#TareasCsNaturales");	x.click(TareasCsNaturales);
	x=$("#TareasFisica");	x.click(TareasFisica);
	x=$("#TareasGeografia");	x.click(TareasGeografia);	
	x=$("#TareasHistoria");	x.click(TareasHistoria);
	x=$("#TareasIngles");	x.click(TareasIngles);	
	x=$("#TareasLiteratura");	x.click(TareasLiteratura);
	x=$("#TareasMatematica");	x.click(TareasMatematica);	
	x=$("#TareasCentroEstudiantes");	x.click(TareasCentroEstudiantes);
	x=$("#TareasDesafioConocimiento");	x.click(TareasDesafioConocimiento);	
	$(document).data('lUnidad', 1);	
}

function TareasCsNaturales(mat){$(document).data('lMateria', 'CienciasNaturales');AgregarBotonUnidad();}
function TareasFisica(mat){$(document).data('lMateria', 'Fisica');AgregarBotonUnidad();}
function TareasGeografia(mat){$(document).data('lMateria', 'Geografia');AgregarBotonUnidad();}
function TareasHistoria(mat){$(document).data('lMateria', 'Historia');AgregarBotonUnidad();}
function TareasIngles(mat){$(document).data('lMateria', 'Ingles');AgregarBotonUnidad();}
function TareasLiteratura(mat){$(document).data('lMateria', 'Literatura');AgregarBotonUnidad();}
function TareasMatematica(mat){$(document).data('lMateria', 'Matematica');AgregarBotonUnidad();}
function TareasCentroEstudiantes(mat){$(document).data('lMateria', 'CentroEstudiantes');AgregarBotonUnidad();}
function TareasDesafioConocimiento(mat){$(document).data('lMateria', 'DesafioConocimiento');AgregarBotonUnidad();}

function AgregarBotonUnidad()
{
	var x=$("#unidades");				
	var nombremateria = $(document).data('lMateria');
	//DesafioConocimiento
    x.html("<input type='button' id='Unidad1' value='"+nombremateria+" Unidad 1'><br>");
	x.append("<input type='button' id='Unidad2' value='"+nombremateria+" Unidad 2'><br>");
	x.append("<input type='button' id='Unidad3' value='"+nombremateria+" Unidad 3'><br>");
	x.append("<input type='button' id='Unidad4' value='"+nombremateria+" Unidad 4'><br>");

	x=$("#Unidad1"); x.click(TareaUnidad1);
	x=$("#Unidad2"); x.click(TareaUnidad2);
	x=$("#Unidad3"); x.click(TareaUnidad3);
	x=$("#Unidad4"); x.click(TareaUnidad4);

}

function TareaUnidad1()
{
	var xmateria = $(document).data('lMateria');;
	var xunidad = 1;
	AbrirPage(xmateria, xunidad);
}

function TareaUnidad2()
{
	var xmateria = $(document).data('lMateria');
	var xunidad = 2;
	AbrirPage(xmateria, xunidad);
}

function TareaUnidad3()
{
	var xmateria = $(document).data('lMateria');;
	var xunidad = 3;
	AbrirPage(xmateria, xunidad);
}

function TareaUnidad4()
{
	var xmateria = $(document).data('lMateria');;
	var xunidad = 4;
	AbrirPage(xmateria, xunidad);
}

function AbrirPage(materia, unidad){	
	$(location).attr('href','Tareas.html?Materia='+materia+'&Unidad='+unidad+'&Alumno=Flores');	
}