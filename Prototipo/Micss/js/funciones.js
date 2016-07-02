$(document).ready(inicio);

  function inicio(){
    var x;	
	$("#uno1").click(contenidosOcultar);
	$("#uno2").click(contenidosMostrar);
	$("#uno3").click(contenidosOcultarDos);
	$("#uno4").click(contenidosMostrarDos);
	$("#uno5").click(ocultar);
  }	
  
  function contenidosOcultar(){	
	$("#contenedor").hide(500);
  }
  function contenidosMostrar(){
	$("#contenedor").show(300);
  }
  
  function contenidosOcultarDos(){	
	$("#contenedorCol").hide(600);
  }
  function contenidosMostrarDos(){
	$("#contenedorCol").show(600);
  }
  
  function ocultar(){
	var contenedor = document.getElementById('contenedor');
	for(var i = 1; i < 100; i++)
		contenedor.style.opacity = 100 - i;
  }
  