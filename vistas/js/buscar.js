$(document).ready(function() {
    var consulta;
    //hacemos focus al campo de búsqueda
    $("#pcs").focus();
    //comprobamos si se pulsa una tecla
    $("#pcs").keyup(function(e) {
        //obtenemos el texto introducido en el campo de búsqueda
        consulta = $("#pcs").val();
        //hace la búsqueda
        $.ajax({
            type: "POST",
            url: "modelos/conexion/buscar.php",
            data: "b=" + consulta,
            dataType: "html",
            error: function() {
                alert("error petición ajax");
            },
            success: function(data) {

                var datos = JSON.parse(data);

               numero    = datos[0].numero;
               nombre    = datos[1].nombre;
               apellidos = datos[2].apellidos;
               edad      = datos[3].edad;
               email     = datos[4].email;
               direccion = datos[5].direccion;
                
              $("#pcs").val(numero);
              $("#nombre_cliente").val(nombre);
              $("#apellido_cliente").val(apellidos);
              $("#edad").val(edad);
              $("#email").val(email);
              $("#direccion").val(direccion);

                console.log(datos);
            }
        });
    });
});