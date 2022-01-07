$(document).ready(function() {
   
  $('#formproductos').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    campana = $.trim($('#campana').val());   
    
    
        $.ajax({
          url: "modelos/include/subir.php",
          type: "POST",
          datatype:"json",    
          data:  {id:id, campana:campana, opcion:opcion},    
          success: function(data) {
            tablaProductos.ajax.reload(null, false);
           }
           
        });			        
											     			
});
        
//para limpiar los campos antes de dar de Alta una Persona
$("#btnsubir").click(function(){
    opcion = 1; //alta           
    id=null;
	    
    });
  });
