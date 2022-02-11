$(document).ready(function () {
  var id, opcion;

  tablaEmail = $("#tablaEmail").DataTable({
    order: [[1, "asc"]],
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json",
    },
    bProcessing: true,
    bDeferRender: true,
    bServerSide: true,
    sAjaxSource: "modelos/serverside/email_campana.php",
    columnDefs: [
      {
        targets: -1,
        defaultContent:
          "<div class='wrapper text-center'><div class='btn-group'><button style='margin-left:5px' class='btn btn-danger btn-sm btnBorrar' data-toggle='tooltip' title='Eliminar'><i class='fas fa-user-minus'></i></button></div></div>",
      },
    ],
    createdRow: function (row) {
      $("td", row).eq(0).css({
        display: "none",
      });
    },
  });

  //Borrar
  $(document).on("click", ".btnBorrar", function () {
    fila = $(this);
    campana = $(this).closest("tr").find("td:eq(2)").text();
    console.log(campana);
    opcion = 3; //eliminar
    Swal.fire({
      title: "¿Desea eliminar esta Campaña?",
      text: "Estos cambios no podran ser revertidos",
      icon: "warning",
      showCancelButton: true,
      position: "top",
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Borrar",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "modelos/include/email_campana.php",
          type: "POST",
          datatype: "json",
          data: { opcion: opcion, campana: campana },

          success: function () {
            Swal.fire({
              position: "top",
              icon: "success",
              title: "Producto eliminado con exito",
            });
            // tablaEmail.row(fila.parents('tr')).remove().draw();
            tablaEmail.ajax.reload();
          },
        });
      }
    });
  });

  // inicio cerrar ventana modal subir email

  $("#cerrar_sub_emails").click(function () {
    tablaEmail.ajax.reload(null, false);
  });

  // fin cerrar ventana modal subir email
});
