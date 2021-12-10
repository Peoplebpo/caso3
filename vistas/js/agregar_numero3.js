$(document).ready(function(){

  var session_id, opcion;

  tablaUsuarios3 = $('#tablaUsuarios3').DataTable({  
   "bProcessing": true,
   "bDeferRender": true,	
   "bServerSide": true,                
   "sAjaxSource": "modelos/serverside/serverside_homologado3.php",	
   "columnDefs": [ {
   "targets": -1,        
   "defaultContent": "<div class='wrapper text-center'><button type='button' class='btn btn-primary btnMostrar' data-bs-toggle='modal' data-bs-target='#modalCRUD' data-toggle='tooltip' title='Ver'><i class='fas fa-eye'></i></button></div>"
   } ],

   "createdRow": function (row) {
      $('td', row).eq(5).css({

         'display': 'none',
      });
      $('td', row).eq(6).css({
         'display': 'none',
      });
      $('td', row).eq(8).css({
         'display': 'none',
      });
   },

     language:{
           url:'vistas/js/Spanish.json'
       }
        
  }); 

  var fila; //captura la fila
  $('#grabaciones').submit(function(e){                         
     e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
     session_id = $.trim($('#session_id').val());    
     phone = $.trim($('#phone').val());
     campana = $.trim($('#campana').val());  
     fecha_grabacion = $.trim($('#fecha_grabacion').val());  
                        
        $.ajax({
           url: "modelos/include/crud3.php",
           type: "POST",
           datatype:"json",    
           data:  {session_id:session_id, phone:phone, campana:campana, fecha_grabacion:fecha_grabacion, opcion:opcion},    
           success: function(data) {
              tablaUsuarios3.ajax.reload(null, false);
           }
        });			        
     $('#modalCRUD').modal('hide');											     			
  });

  $(document).on("click", ".btnMostrar", function(){		 

     opcion = 4;//mostrar

     fila = $(this).closest("tr");	        

     session_id = fila.find('td:eq(0)').text(); //capturo el ID	
     console.log(session_id)	

    
     phone = fila.find('td:eq(1)').text();
     campana = fila.find('td:eq(2)').text();
     nombre_agente = fila.find('td:eq(3)').text();
     rut_agente = fila.find('td:eq(4)').text();
     numero_agente = fila.find('td:eq(5)').text();
     email_agente = fila.find('td:eq(6)').text();
     fecha_grabacion = fila.find('td:eq(7)').text();
     fecha = fila.find('td:eq(8)').text();


     $("#session_id").val(session_id);
     $("#phone").val(phone);
     $("#campana_gh").val(campana);
     $("#nombre_agente").val(nombre_agente);
     $("#rut_agente").val(rut_agente);
     $("#numero_agente").val(numero_agente);
     $("#email_agente").val(email_agente);
     $("#fecha_grabacion").val(fecha_grabacion);
     $("#fecha").val(fecha);
    
    
     $('#modalCRUD').modal('show');

     
     $.ajax({
      url: "modelos/include/crud3.php",
      type: "POST",
      datatype:"json",    
      data:  {session_id:session_id, opcion:opcion},    

      success: function(grabaciones) {

         var data2 = JSON.parse(grabaciones);

         var g = data2[0].record_url;
         $('#valor').attr('src', g);


      }

   });	

    
          
 });
  
});
