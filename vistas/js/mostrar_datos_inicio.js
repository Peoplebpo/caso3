$(document).ready(function () {

    console.log('se cargaron datos de inicio')

    opcion = 1;

    $.ajax({
        url: "modelos/include/procesa_datos_inicio.php",
        type: "POST",
        datatype: "json",
        data: {
            opcion: opcion
        },

        success: function (data) {

            var datos = JSON.parse(data);

            $('#venta').text(datos[0].total);

        }
    });

    opcion = 2;

    $.ajax({
        url: "modelos/include/procesa_datos_inicio.php",
        type: "POST",
        datatype: "json",
        data: {
            opcion: opcion
        },

        success: function (data) {

            var datos = JSON.parse(data);

            $('#no_venta').text(datos[0].total);

        }
    });

    opcion = 3;

    $.ajax({
        url: "modelos/include/procesa_datos_inicio.php",
        type: "POST",
        datatype: "json",
        data: {
            opcion: opcion
        },

        success: function (data) {

            var datos = JSON.parse(data);

            $('#total_referidos').text(datos[0].total_referidos);

        }
    });

    opcion = 4;

    $.ajax({
        url: "modelos/include/procesa_datos_inicio.php",
        type: "POST",
        datatype: "json",
        data: {
            opcion: opcion
        },

        success: function (data) {

            var datos = JSON.parse(data);

            $('#total_lista_negra').text(datos[0].total_lista_negra);


        }
    });

});