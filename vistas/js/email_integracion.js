  /*inicio boton modificar*/

  $(document).ready(function () {
    opcion = 2;
    
   
    $.ajax({
      datatype: "json",
      type: "POST",
      url: "modelos/include/email_integracion.php",
      data: {
        opcion
      },

    }).done(function (respuesta) {

      var data = JSON.parse(respuesta);

      $('#email_aut').val(data[0].email_aut);
      $('#servidor_smtp').val(data[0].servidor_smtp);
      $('#usuario').val(data[0].usuario);
      $('#clave').val(data[0].clave);
      $('#puerto').val(data[0].puerto);
      

    });

  });

    $(document).on("click", "#btnguardar", function (e)  {

      e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
      var email_aut     = $('#email_aut').val();
      var servidor_smtp = $('#servidor_smtp').val();
      var usuario       = $('#usuario').val();
      var clave         = $('#clave').val();
      var puerto        = $('#puerto').val();

      console.log(clave);
      

      opcion = 3;

    

      if (
        email_aut       == '' ||
        servidor_smtp   == '' ||
        usuario         == '' ||
        clave           == '' ||
        puerto          == '') {

        Swal.fire({
          position: 'top',
          icon: 'error',
          title: 'ERROR',
          text: 'Complete todos los campos',
        })
        return false;
      } else {
        $.ajax({
          url: "modelos/include/email_integracion.php",
          type: "POST",
          datatype: "json",
          data: {
            email_aut,
            servidor_smtp,
            usuario,
            clave,
            puerto, 
            opcion
          },
          success: function (data) {
            window.location = "intemail";
          }
        });
        
      }
    });


  /*fin boton modificar*/