div = document.getElementById('ver_datos');
div.style.display = 'none';
var id
  $(document).ready(function () {

    $("#employee_data").DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
      "order": [
        [2, "desc"]
      ],
      "processing": true,
      "serverSide": true,
      "sAjaxSource": "modelos/serverside/template.php",
      "columnDefs": [{
        "targets": -1,
        "defaultContent": "<div class='wrapper text-center'><div class='btn-group'><button type='button' class='btn btn-primary btnVer' title='Ver'><i class='fas fa-eye'></i></button><button style='margin-left:5px' class='btn btn-danger btn-sm btnBorrar' data-toggle='tooltip' title='Eliminar'><i class='fas fa-user-minus'></i></button></div></div>"
      }],

      "createdRow": function (row) {

      $('td', row).eq(0).css({
        'display': 'none',
      });
      $('td', row).eq(3).css({
        'display': 'none',
      });
  
    }

   

    });

    $(document).on("click", ".btnVer", function(){	


      div = document.getElementById('template');
      div.style.display = 'none';

      div = document.getElementById('ver_datos');
      div.style.display = '';
      
       fila = $(this).closest("tr");	        

      id = fila.find('td:eq(0)').text();
      nombre = fila.find('td:eq(1)').text();
      descripcion = fila.find('td:eq(2)').text();
      
      opcion=5
      $.ajax({
        type: "POST",
        url: "modelos/include/template.php",
        dataType: "json",
        data: {id,opcion},


        success: function (a) {
          contenido = a[0].contenido
          console.log(contenido);
          tinymce.get("contenido").setContent(contenido);
        }
        
      });

      $("#id").val(id);
      $("#nombre").val(nombre);
      $("#descripcion").val(descripcion);
      
      

     });

     $(document).on("click", ".btnBorrar", function(){	

      
       fila = $(this).closest("tr");	        

      id = fila.find('td:eq(0)').text();
      

            opcion = 3; //eliminar  
       Swal.fire({
         title: '¿Desea eliminar este Template?',
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
              url: "modelos/include/template.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, id:id},  
             
              success: function() {
               Swal.fire({
                  position: 'top',
                  icon: 'success',
                  title: 'Template eliminado con exito'
                  
                })
                .then(function(){
                  window.location = "template";
                });       
               }
            });	
        }

       })
        

     });

     $('#btn_update').click(function () {
      var contenido = tinymce.get("contenido").getContent();
      if (
        $('#nombre').val() == '' ||
        $('#descripcion').val() == '' ||
        contenido == '') 
        {
          Swal.fire({
            icon: 'error',
            title: 'Todos los campos deben tener contenido',
            position: 'top',
            text: 'Campos Obligatorios'
          })
  
          return false;
  
        }else {
  
          /*$('#btn_update').attr("disabled", true);*/          
          var nombre = $.trim($("#nombre").val())
          var descripcion = $.trim($("#descripcion").val())
          opcion=6
          $.ajax({
            type: "POST",
            url: "modelos/include/template.php",
            dataType: "json",
            data: {id,opcion, nombre,descripcion,contenido},
            success: function (a) {
              console.log(a)
              if(a=='No'){
                $(".alertM").html('<div class="alert alert-danger" role="alert">Error</div>')
              }else{
                id = a[0].id
                nombre = a[0].nombre
                descripcion = a[0].descripcion
                contenido = a[0].contenido
                tinymce.get("contenido").setContent(contenido);
                $("#id").val(id);
                $("#nombre").val(nombre);
                $("#descripcion").val(descripcion);
                $(".alertM").html('<div class="alert alert-success" role="alert">Actualizado</div>')
              }
            }
          });
  
          return false;
        }
  
        
    });
    

  });
