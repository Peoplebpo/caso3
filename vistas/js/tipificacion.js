var opciones = {
    "COBRANZA": ["", "Compromete Pago", "Pago Realizado"],
    "NO COBRANZA": ["Desconoce deuda", "Sin Liquidez transitoria", "Sin Liquidez permanente", "Exige no ser vuelto a llamar (Lista No molestar)", 
    "Titular no disponible - Mensaje Interlocutor válido", "Titular no disponible - Mensaje Interlocutor no válido"],
    "SIN CONTACTO": ["Buzón de Voz", "Sin Cobertura"],
}
$(function () {
    var fillSecondary = function () {
        var selected = $('#tipo').val();
        $('#accion').empty();
        opciones[selected].forEach(function (element, index) {
            $('#accion').append('<option value="' + element + '">' + element + '</option>');
        });
    }
    $('#tipo').change(fillSecondary);
    fillSecondary();
});


//campos desabiitados y requeridos
$(function() {

    $("#CustLoginIDAux").prop("disabled", true);
    $("#dni_cliente").prop("disabled", true);
    $("#sucursal").prop("disabled", true);
    $("#region").prop("disabled", true);
    $("#ciudad").prop("disabled", true);
    $("#fecha_cpago").prop("disabled", true);




    $("#tipo_cliente").change(function() {
        

        if ($(this).val() === "Chile") {
            
            $("#CustLoginIDAux").prop("disabled", false);
            $("#dni_cliente").prop("disabled", true);
           

        }else if ($(this).val() === "Colombia"){

            
            $("#dni_cliente").prop("disabled", false);
            $("#CustLoginIDAux").prop("disabled", true);
           

        }else {
            
            $("#CustLoginIDAux").prop("disabled", true);
            $("#dni_cliente").prop("disabled", true);
            
        }

    });

    $("#forma_entrega").change(function() {
        

        if ($(this).val() === "Retiro Tienda") {
            
            $("#sucursal").prop("disabled", false);
            $("#region").prop("disabled", true);
            $("#ciudad").prop("disabled", true);
           

        }else if ($(this).val() === "Delivery"){

            
            $("#region").prop("disabled", false);
            $("#ciudad").prop("disabled", false);
            $("#sucursal").prop("disabled", true);
           

        }else {
            
            $("#region").prop("disabled", true);
            $("#ciudad").prop("disabled", true);
            $("#sucursal").prop("disabled", true);
            
        }

    });

    $("#accion").change(function() {
        

        if ($(this).val() === "Compromete Pago") {
            
            
            $("#fecha_cpago").prop("disabled", false);
            
           

        }else {
            $("#fecha_cpago").prop("disabled", true);
        }

    });

});
