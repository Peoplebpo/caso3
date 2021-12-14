var opciones = {
    "VENTA": ["Venta"],
    "NO VENTA": ["No cumple Política Comercial y/o Crediticia", "Desea Otro Producto", "Exige no ser vuelto a llamar (Lista No molestar)", 
                "Mala Experiencia con la Compañía", "No le Interesa Producto", "Promocion Poco Atractiva (Precio)", "Sin Cobertura en Zona", 
                "Sin Stock de Producto", "Ya es Cliente de la Compañía"]
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
    $("#direccion_entrega").prop("disabled", true);


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
            $("#direccion_entrega").prop("disabled", true);
           

        }else if ($(this).val() === "Delivery"){

            
            $("#region").prop("disabled", false);
            $("#ciudad").prop("disabled", false);
            $("#direccion_entrega").prop("disabled", false);
            $("#sucursal").prop("disabled", true);
           

        }else {
            
            $("#region").prop("disabled", true);
            $("#ciudad").prop("disabled", true);
            $("#direccion_entrega").prop("disabled", true);
            $("#sucursal").prop("disabled", true);
            
        }

    });

});
