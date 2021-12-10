$(document).ready(function() {
  var id, opcion;
  opcion = 4;
      
  $('#tablacomp').DataTable({  
    "paging": false,
    "ordering": false,
    "searching": false,
    "info": false,

      "ajax":{            
          "url": "modelos/include/comportamiento.php", 
          "method": 'POST', //usamos el metodo POST
          "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
          "dataSrc":""
      },
      "columns":[
          {"data": "accion"},
          {"data": "total"},
         ]
        
  });     
});   
