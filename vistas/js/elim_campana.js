$(document).ready(function() {
   
    //Borrar
   $("#btneliminar").click(function(){           
       nombre = $('#nombre1').val(); 		
       opcion = 3; //eliminar  
       Swal.fire({
         title: '¿Desea eliminar esta Campaña?',
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
              url: "modelos/include/elim_campana.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, nombre:nombre},  
             
              success: function(a) {
                console.log(a);
               Swal.fire({
                  position: 'top',
                  icon: 'success',
                  title: 'Campaña eliminada con exito'
                })
                window.location = "campanaemail";        
               }
            });	
        }

       })
                     
  
    });
   });
