  /*inicio boton modificar*/

  $(document).on("click", ".btneditar", function () {
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

      $('#dominio').val(data[0].dominio);
      $('#campana_id').val(data[0].campana_id);
      $('#access_token').val(data[0].access_token);
      
      
      $('#modalInt').modal('show');

      

    });

  });

    $(document).on("click", "#btnguardar", function (e)  {

      e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
      var dominio         = $('#dominio').val();
      var campana_id      = $('#campana_id').val();
      var access_token    = $('#access_token').val();
      

      opcion = 3;

      console.log(campana_id);

      if (
        dominio       == '' ||
        campana_id       == '' ||
        access_token      == '') {

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
            dominio,
            campana_id,
            access_token,
            opcion
          },
          success: function (data) {
          }
        });
        $('#modalInt').modal('hide');
      }
    });


  /*fin boton modificar*/