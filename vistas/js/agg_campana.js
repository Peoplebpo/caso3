$(document).ready(function () {
  var id, opcion;

  var fila; //captura la fila, para editar o eliminar
  //submit para el Alta y Actualización
  $("#formproductos").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    nombre = $.trim($("#nombre").val());

    $.ajax({
      url: "modelos/include/agg_campana.php",
      type: "POST",
      datatype: "json",
      data: { id: id, nombre: nombre, opcion: opcion },
      success: function (r) {
        console.log(r);
        if (r == 1) {
          Swal.fire({
            icon: "error",
            title: "La Campaña ya existe",
            text: "Verificar que la Campaña tenga un Nombre Diferente.",
          });
        } else {
          $("#formproductos")[0].reset();
          Swal.fire("Felicidades", "Campaña Agregada con Exito", "success")
          .then(function(){
            window.location = "campanaemail";
          });
          
        }
      },
    });
  });
});
