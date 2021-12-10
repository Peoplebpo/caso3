$(document).ready(function(){

  var session_id, opcion;

  tablaUsuarios = $('#tablaUsuarios').DataTable({  
   "bProcessing": true,
   "bDeferRender": true,	
   "bServerSide": true,                
   "sAjaxSource": "modelos/serverside/serverside_homologado.php",	
   "columnDefs": [ {
   "targets": -1,        
   "defaultContent": "<div class='wrapper text-center'><button type='button' class='btn btn-primary btnMostrar' data-bs-toggle='modal' data-bs-target='#modalCRUD' data-toggle='tooltip' title='Ver'><i class='fas fa-eye'></i></button></div>"
   } ],

   "createdRow": function (row) {
      $('td', row).eq(3).css({
         'display': 'none',
      });
      $('td', row).eq(4).css({
         'display': 'none',
      });
      $('td', row).eq(6).css({
         'display': 'none',
      });
      $('td', row).eq(7).css({
         'display': 'none',
      });
      $('td', row).eq(8).css({
         'display': 'none',
      });
      $('td', row).eq(10).css({
         'display': 'none',
      });
      $('td', row).eq(11).css({
         'display': 'none',
      });
      $('td', row).eq(12).css({
         'display': 'none',
      });
      $('td', row).eq(13).css({
         'display': 'none',
      });
      $('td', row).eq(14).css({
         'display': 'none',
      });
      $('td', row).eq(15).css({
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
           url: "modelos/include/crud.php",
           type: "POST",
           datatype:"json",    
           data:  {session_id:session_id, phone:phone, campana:campana, fecha_grabacion:fecha_grabacion,  opcion:opcion},    
           success: function(data) {
              tablaUsuarios.ajax.reload(null, false);
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
     fecha_grabacion = fila.find('td:eq(3)').text();
     fecha = fila.find('td:eq(4)').text();
     nombre_agente = fila.find('td:eq(5)').text();
     rut_agente = fila.find('td:eq(6)').text();
     fecha_ingreso = fila.find('td:eq(7)').text(); 
     hora_ingreso = fila.find('td:eq(8)').text();
     pcs = fila.find('td:eq(9)').text();
     tipo = fila.find('td:eq(10)').text();
     campana_t = fila.find('td:eq(11)').text();
     producto = fila.find('td:eq(12)').text();
     tipo_cliente = fila.find('td:eq(13)').text();
     rut_cliente = fila.find('td:eq(14)').text();
     dni_cliente = fila.find('td:eq(15)').text();
     

     

     $("#session_id").val(session_id);
     $("#phone").val(phone);
     $("#campana_g").val(campana);
     $("#fecha_grabacion").val(fecha_grabacion);
     $("#fecha").val(fecha);
     $("#nombre_agente").val(nombre_agente);
     $("#rut_agente").val(rut_agente);
     $("#fecha_ingreso").val(fecha_ingreso);
     $("#hora_ingreso").val(hora_ingreso);
     $("#pcs").val(pcs);
     $("#tipo").val(tipo);
     $("#campana_t").val(campana_t);
     $("#producto").val(producto);
     $("#tipo_cliente").val(tipo_cliente);
     $("#rut_cliente").val(rut_cliente);
     $("#dni_cliente").val(dni_cliente);

    
    
     $('#modalCRUD').modal('show');
    
     $.ajax({
        url: "modelos/include/crud.php",
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
