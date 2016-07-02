// primera petición ajax
    var comments = $.ajax({
        $.getJSON(archivo, function(result){		
			$ResultxTarea = result;
		});
    });
    
    // segunda petición ajax
    var validation = $.ajax({
        AddPages();
    });
    
    // cuando las dos peticiones sean realizadas
    // ejecuta alguna función de devolución definida
    // dentro de deferred.then
    $.when(comments, validation).then(
        function(){
            alert('Peticiones realizadas');
        },
        function(){
            alert('Disculpe, existió un problema');
        }
    );