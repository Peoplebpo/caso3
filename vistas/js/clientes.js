$(document).ready(function() {
   var id, opcion;
       
   tablaProductos = $('#tablaProductos').DataTable({    
            "order": [[ 1, "asc" ]],
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
               },                      
           "bProcessing": true,
           "bDeferRender": true,	
           "bServerSide": true,                
           "sAjaxSource": "modelos/serverside/clientes.php",	
           "columnDefs": [ {
               "targets": -1,        
               "defaultContent": "<div class='wrapper text-center'><div class='btn-group'><button class='btn btn-info btn-sm btnEditar' data-toggle='tooltip' title='Editar'><i class='fas fa-user-edit'></i></button><button style='margin-left:5px' class='btn btn-danger btn-sm btnBorrar' data-toggle='tooltip' title='Eliminar'><i class='fas fa-user-minus'></i></button></div></div>"
           } ],	    
           "createdRow": function (row, id ) {
            $('td', row).eq(0).css({
               'display': 'none',
              }),
              $('td', row).eq(7).css({
                'display': 'none',
             }),
             $('td', row).eq(8).css({
                 'display': 'none',
             }),
              $('td', row).eq(9).css({
                'display': 'none',
             })
          
         },
   });     
   
   var fila; //captura la fila, para editar o eliminar
   //submit para el Alta y Actualización
   $('#formproductos').submit(function(e){                         
       e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
       numero    = $.trim($('#numero').val()); 
       nombre    = $.trim($('#nombre').val());
       apellidos = $.trim($('#apellidos').val());
       edad      = $.trim($('#edad').val());
       email     = $.trim($('#email').val());
       direccion = $.trim($('#direccion').val()); 
       ciclo_fact     = $.trim($('#ciclo_fact').val());  
       fact_pendiente = $.trim($('#fact_pendiente').val()); 
       periodo_fact   = $.trim($('#periodo_fact').val()); 
       
       
           $.ajax({
             url: "modelos/include/clientes.php",
             type: "POST",
             datatype:"json",    
             data:  {id:id, numero:numero, nombre:nombre, apellidos:apellidos, edad:edad, email:email, direccion:direccion, ciclo_fact:ciclo_fact, fact_pendiente:fact_pendiente, periodo_fact:periodo_fact, opcion:opcion},    
             success: function(data) {
               tablaProductos.ajax.reload(null, false);
              }
              
           });			        
       $('#modalCRUD').modal('hide');											     			
   });
           
   //para limpiar los campos antes de dar de Alta una Persona
   $("#btnguardar").click(function(){
       opcion = 1; //alta           
       id=null;

       
       $("#formproductos").trigger("reset");
       $(".modal-header").css( "background-color", "#17a2b8");
       $(".modal-header").css( "color", "white" );
       $(".modal-title").text("Alta Clientes");
       $('#modalCRUD').modal('show');	    

   });
   
   //Editar        
   $(document).on("click", ".btnEditar", function(){		        
       opcion = 2;//editar
       fila = $(this).closest("tr");	   

       id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
       numero         = fila.find('td:eq(1)').text();
       nombre         = fila.find('td:eq(2)').text();
       apellidos      = fila.find('td:eq(3)').text();
       edad           = fila.find('td:eq(4)').text();
       email          = fila.find('td:eq(5)').text();
       direccion      = fila.find('td:eq(6)').text();
       ciclo_fact     = fila.find('td:eq(7)').text();
       fact_pendiente = fila.find('td:eq(8)').text();
       periodo_fact   = fila.find('td:eq(9)').text();
      
     
       $("#numero").val(numero);
       $("#nombre").val(nombre);
       $("#apellidos").val(apellidos);
       $("#edad").val(edad);
       $("#email").val(email);
       $("#direccion").val(direccion);
       $("#ciclo_fact").val(ciclo_fact);
       $("#fact_pendiente").val(fact_pendiente);
       $("#periodo_fact").val(periodo_fact);
      
     
       $(".modal-header").css("background-color", "#007bff");
       $(".modal-header").css("color", "white" );
       $(".modal-title").text("Editar Clientes");		
       $('#modalCRUD').modal('show');		 
       
   });

   //Borrar
   $(document).on("click", ".btnBorrar", function(){
       fila = $(this);           
       id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
       opcion = 3; //eliminar  
       Swal.fire({
         title: '¿Desea eliminar el Cliente?',
         text: "Estos cambios no podran ser revertidos",
         icon: 'warning',
         showCancelButton: true,
         position: 'top',
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Borrar'
       }).then((result) => { 
         if (result.isConfirmed) {            
            $.ajax({
              url: "modelos/include/clientes.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, id:id},  
             
              success: function() {
               Swal.fire({
                  position: 'top',
                  icon: 'success',
                  title: 'Cliente eliminado con exito'
                })
                  tablaProductos.row(fila.parents('tr')).remove().draw();                
               }
            });	
        }

       })
                     
  
    });
  
    
   });    
