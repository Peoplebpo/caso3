  /*inicio boton modificar*/

  $(document).ready(function () {
    opcion = 2;
    
   
    $.ajax({
      datatype: "json",
      type: "POST",
      url: "modelos/include/sms_integracion.php",
      data: {
        opcion
      },

    }).done(function (respuesta) {

      var data = JSON.parse(respuesta);

      $('#usuario').val(data[0].usuario);
      $('#clave').val(data[0].clave);
      

    });

  });

    $(document).on("click", "#btnguardar", function (e)  {

      e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
      var usuario = $('#usuario').val();
      var clave   = $('#clave').val();
     
      

      opcion = 3;

      console.log(clave);

      if (
        usuario       == '' ||
        clave       == '' ) {

        Swal.fire({
          position: 'top',
          icon: 'error',
          title: 'ERROR',
          text: 'Complete todos los campos',
        })
        return false;
      } else {
        $.ajax({
          url: "modelos/include/sms_integracion.php",
          type: "POST",
          datatype: "json",
          data: {
            usuario,
            clave,
            opcion
          },
          success: function (data) {
            window.location = "intsms";
          }
        });
        
      }
    });


  /*fin boton modificar*/