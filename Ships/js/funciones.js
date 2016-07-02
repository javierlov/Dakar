$(document).ready(inicio);


  function inicio(){
    var x;	
	
	x=$("#DetallePuerto0");
	x.click(AbrirPage0);
	
	x=$("#DetallePuerto1");
	x.click(AbrirPage1);
	
	x=$("#DetallePuerto2");
	x.click(AbrirPage2);
	
	x=$("#DetallePuerto3");
	x.click(AbrirPage3);
	
	x=$("#DetallePuerto4");
	x.click(AbrirPage4);
	
	x=$("#DetallePuerto5");
	x.click(AbrirPage5);
	
	x=$("#DetallePuerto6");
	x.click(AbrirPage6);
	
	x=$("#DetallePuerto7");
	x.click(AbrirPage7);

	x=$("#RecurosVenta0");
	x.click(RecurosVenta);

	x=$("#RecurosCompra0");
	x.click(RecurosCompra);
	
  } 
  
  function RecurosVenta(){
  	//alert('recurso venta');
  	$(location).attr('href', 'http://localhost/ships/MostrarDetalleRecurso.php?RECURSO=VENTA');
  }
  
  function RecurosCompra(){
  	$(location).attr('href', 'http://localhost/ships/MostrarDetalleRecurso.php?RECURSO=COMPRA');
  }
  
  function DetallePuerto(valor) {

  	$("#idPUERTO").val(valor);
	var texto=$("#idPUERTO").val();
	
	$("#idtPUERTO").val(valor);	
	//alert("valor del id " + texto);
  }
  
  function AbrirPage0(){
	$(location).attr('href', 'http://localhost/ships/MostrarDetallePuerto.php?PUERTO=0');
  }
  
  function AbrirPage1(){
	$(location).attr('href', 'http://localhost/ships/MostrarDetallePuerto.php?PUERTO=1');
  }
  
  function AbrirPage2(){
	$(location).attr('href', 'http://localhost/ships/MostrarDetallePuerto.php?PUERTO=2');
  }
  
  function AbrirPage3(){
	$(location).attr('href', 'http://localhost/ships/MostrarDetallePuerto.php?PUERTO=3');
  }
  
  function AbrirPage4(){
	$(location).attr('href', 'http://localhost/ships/MostrarDetallePuerto.php?PUERTO=4');
  }
  
  function AbrirPage5(){
	$(location).attr('href', 'http://localhost/ships/MostrarDetallePuerto.php?PUERTO=5');
  }
  
  function AbrirPage6(){
	$(location).attr('href', 'http://localhost/ships/MostrarDetallePuerto.php?PUERTO=6');
  }
  
  function AbrirPage7(){
	$(location).attr('href', 'http://localhost/ships/MostrarDetallePuerto.php?PUERTO=7');
  }
  
