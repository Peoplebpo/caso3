$(document).ready(function () {

    console.log('se cargaron datos de inicio')

    // CARGA VALOR PRIMER CUADRO

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

            $('#cobranza').text(datos[0].total);

        }
    });

    // CARGA VALOR SEGUNDO CUADRO

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

            $('#no_cobranza').text(datos[0].total);

        }
    });

    // CARGA VALOR TERCER CUADRO

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

            $('#total_grabaciones').text(datos[0].total_grabaciones);

        }
    });

    // CARGA VALOR CUARTO CUADRO

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

            $('#total_grabaciones_huerfanas').text(datos[0].total_grabaciones_huerfanas);


        }
    });

});