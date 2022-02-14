$(document).ready(function() {
  
   
    //Borrar
   $("#btneliminar").click(function(){           
       nombre = $('#nombre1').val(); 	
       if(nombre==0){
        Swal.fire({
          position: 'top',
          icon: 'error',
          title: 'Seleccione una opción'
        })
       }else{
       console.log(nombre)	
       opcion = 3; //eliminar  
       Swal.fire({
         title: '¿Desea eliminar esta Campaña?',
         text: "Estos cambios no podrán ser revertidos",
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
                opcion=5
                $.ajax({
                  url: "modelos/include/crud.php",
                  type: "POST",
                  datatype: "json",
                  data: {opcion},
                  success:function(data) {
                    console.log(data)
                    let taskss = JSON.parse(data);
                    let templates = '<option value="0">Seleccione:</option>';
                    taskss.forEach(tasks => {
                      templates += `<option value="${tasks.id}">${tasks.nombre}</option>`
                    })
                    $('#nombre1').html(templates)
                  }
                })
               }
            });	
        }

       })
      }
    });
   });
