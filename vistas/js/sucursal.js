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
           "sAjaxSource": "modelos/serverside/sucursal.php",	
           "columnDefs": [ {
               "targets": -1,        
               "defaultContent": "<div class='wrapper text-center'><div class='btn-group'><button class='btn btn-info btn-sm btnEditar' data-toggle='tooltip' title='Editar'><i class='fas fa-user-edit'></i></button><button style='margin-left:5px' class='btn btn-danger btn-sm btnBorrar' data-toggle='tooltip' title='Eliminar'><i class='fas fa-user-minus'></i></button></div></div>"
           } ],	    
           "createdRow": function (row, id ) {
            $('td', row).eq(0).css({
               'display': 'none',
            })
          
         },
   });     
   
   var fila; //captura la fila, para editar o eliminar
   //submit para el Alta y Actualización
   $('#formproductos').submit(function(e){                         
       e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
       nombre = $.trim($('#nombre').val());   
       
       
           $.ajax({
             url: "modelos/include/sucursal.php",
             type: "POST",
             datatype:"json",    
             data:  {id:id, nombre:nombre, opcion:opcion},    
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
       $(".modal-title").text("Alta de Sucursal");
       $('#modalCRUD').modal('show');	    

   });
   
   //Editar        
   $(document).on("click", ".btnEditar", function(){		        
       opcion = 2;//editar
       fila = $(this).closest("tr");	        
       id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
       nombre = fila.find('td:eq(1)').text();

       $("#nombre").val(nombre);


       $(".modal-title").text("Editar Sucursal");		
       $('#modalCRUD').modal('show');		 
       
   });

   //Borrar
   $(document).on("click", ".btnBorrar", function(){
       fila = $(this);           
       id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
       opcion = 3; //eliminar  
       Swal.fire({
         title: '¿Desea eliminar esta Sucursal?',
         text: "Estos cambios no podran ser revertidos",
         icon: 'warning',
         showCancelButton: true,
         position: 'top',
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         cancelButtonText: 'Cancelar',
         confirmButtonText: 'Borrar'
       }).then((result) => { 
         if (result.isConfirmed) {            
            $.ajax({
              url: "modelos/include/sucursal.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, id:id},  
             
              success: function() {
               Swal.fire({
                  position: 'top',
                  icon: 'success',
                  title: 'Sucursal eliminada con exito'
                })
                  tablaProductos.row(fila.parents('tr')).remove().draw();                
               }
            });	
        }

       })
                     
  
    });
  
    
   });    
