$(document).ready(function() {
   var id, opcion;
       
   tablaUsuarios6 = $('#tablaUsuarios6').DataTable({    
            "order": [[ 1, "desc" ]],
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
               },                      
           "bProcessing": true,
           "bDeferRender": true,	
           "bServerSide": true,                
           "sAjaxSource": "modelos/serverside/serverside_homologado6.php",	
           "columnDefs": [ {
               "targets": -1,        
               "defaultContent": "<div class='wrapper text-center'><div class='btn-group'><button class='btn btn-info btn-sm btnEditar' data-toggle='tooltip' title='Editar'><i class='fas fa-user-edit'></i></button><button style='margin-left:5px' class='btn btn-danger btn-sm btnBorrar' data-toggle='tooltip' title='Eliminar'><i class='fas fa-user-minus'></i></button></div></div>"
           } ],	    
           "createdRow": function (row) {
            $('td', row).eq(0).css({
               'display': 'none',
            }),
            $('td', row).eq(2).css({
               'display': 'none',
            }),
            $('td', row).eq(4).css({
               'display': 'none',
            }),
            $('td', row).eq(5).css({
               'display': 'none',
            })
          
         },
   });     
   
   var fila; //captura la fila, para editar o eliminar
   //submit para el Alta y Actualización
   $('#formUsuarios1').submit(function(e){                         
       e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
       nombre = $.trim($('#nombre').val());   
       correo = $.trim($('#correo').val()); 
       usuario = $.trim($('#usuario').val()); 
       password = $.trim($('#password').val());
       rut_usuario = $.trim($('#rut_usuario').val());
       servicio = $.trim($('#servicio').val());
       rol = $.trim($('#rol').val());
       check1 = document.getElementById("check1").checked; 
       if(check1==true){
          estado="Activo"
       }else{
          estado="Inactivo"
       }
       console.log(nombre + correo + usuario + password +  rut_usuario + servicio + rol + estado)
                                  
           $.ajax({
             url: "modelos/include/crud6.php",
             type: "POST",
             datatype:"json",    
             data:  {id:id, nombre:nombre, correo:correo, usuario:usuario, password:password , rut_usuario:rut_usuario, servicio:servicio, rol:rol,estado:estado, opcion:opcion},    
             success: function(data) {
               console.log(data)
               tablaUsuarios6.ajax.reload(null, false);
              }
              
           });			        
       $('#modalCRUD').modal('hide');											     			
   });
           
   //para limpiar los campos antes de dar de Alta una Persona
   $("#btnguardar").click(function(){
      console.log("prueba")
       opcion = 1; //alta           
       id=null;
       $("#formUsuarios1").trigger("reset");
       $(".modal-header").css( "background-color", "#17a2b8");
       $(".modal-header").css( "color", "white" );
       $(".modal-title").text("Alta de Usuario");
       $('#modalCRUD').modal('show');	    
   });
   
   //Editar        
   $(document).on("click", ".btnEditar", function(){		        
       opcion = 2;//editar
       fila = $(this).closest("tr");	        
       id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
       nombre = fila.find('td:eq(1)').text();
       correo = fila.find('td:eq(2)').text();
       usuario = fila.find('td:eq(3)').text();
       password = fila.find('td:eq(4)').text();
       rut_usuario = fila.find('td:eq(5)').text();
       servicio = fila.find('td:eq(6)').text();
       rol = fila.find('td:eq(7)').text();
       estado = fila.find('td:eq(8)').text();
       if(estado=='Activo'){
         document.getElementById("check1").checked = true;
      }else{
            document.getElementById("check1").checked = false;
      }
       console.log(estado)
       $("#nombre").val(nombre);
       $("#correo").val(correo);
       $("#usuario").val(usuario);
       $("#password").val(password);
       $("#rut_usuario").val(rut_usuario);
       $("#servicio").val(servicio);
       $("#rol").val(rol);
       $(".modal-header").css("background-color", "#007bff");
       $(".modal-header").css("color", "white" );
       $(".modal-title").text("Editar Usuario");		
       $('#modalCRUD').modal('show');		 
       
   });
   fila = $('#tablaUsuarios6 tbody').closest("tr");	
   fila.find('td:eq(2)').on ("click",function (event) {
      console.log("hola")
   })
   //Borrar
   $(document).on("click", ".btnBorrar", function(){
       fila = $(this);           
       id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
       opcion = 3; //eliminar  
       Swal.fire({
         title: '¿Desea eliminar este Usuario?',
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
              url: "modelos/include/crud6.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, id:id},  
             
              success: function() {
               Swal.fire({
                  position: 'top',
                  icon: 'success',
                  title: 'Usuario eliminado con exito'
                })
                  tablaUsuarios6.row(fila.parents('tr')).remove().draw();                
               }
            });	
        }

       })
                     
  
    });
  
    
   });    



   console.log("hola")