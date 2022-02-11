$(document).ready(function () {
  listaNegra = $("#listaNegra").DataTable({
    order: [[2, "desc"]],
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json",
    },
    processing: true,
    serverSide: true,
    sAjaxSource: "modelos/serverside/serverside_homologado4.php",
    columnDefs: [
      {
        targets: -1,
        defaultContent:
          "<div class='wrapper text-center'><button class='btn btn-danger btn-sm btnborrar' data-bs-toggle='modal' data-toggle='tooltip' title='Eliminar'><i class='fas fa-user-minus'></i></button></div>",
      },
    ],
  });

  $(document).on("click", ".btnborrar", function () {
    fila = $(this);
    listaNegra = $("#listaNegra");
    id = parseInt($(this).closest("tr").find("td:eq(0)").text());
    opcion = 2; //eliminar
    Swal.fire({
      title: "¿Desea eliminar este numero?",
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
          url: "modelos/include/crud_lista_negra.php",
          type: "POST",
          datatype: "json",
          data: {
            opcion: opcion,
            id,
          },
          success: function () {
            Swal.fire({
              position: "top",
              icon: "success",
              title: "Numero eliminado con exito",
            });

            // listaNegra.row(fila.parents('tr')).remove().draw();
            $("#listaNegra").DataTable().ajax.reload();
          },
        });
      }
    });
  });

  // inicio cerrar ventana modal subir email

  $("#cerrar_sub_lnegra").click(function () {
    console.log("prueba ln")
    $("#listaNegra").DataTable().ajax.reload();
  });
});

// fin cerrar ventana modal subir email

$(document).ready(function () {
  /*inicio boton agregar*/
  listaNegra = $("#listaNegra");

  $("#btningresar").click(function (e) {
    opcion = 1; //alta
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    var numero = $("#numero").val();

    if ($("#numero").val() == "") {
      Swal.fire({
        position: "top",
        icon: "error",
        title: "ERROR",
        text: "Complete todos los campos",
      });

      return false;
    } else {
      $.ajax({
        url: "modelos/include/crud_lista_negra.php",
        type: "POST",
        datatype: "json",
        data: {
          numero,
          opcion,
        },
        success: function (respuesta) {
          Swal.fire({
            position: "top",
            icon: "success",
            title: "Numero Agragado con exito",
          });

          // listaNegra.ajax.reload(null, false);
          $("#listaNegra").DataTable().ajax.reload();
        },
      });

      $("#numero").val("");
      // $('#ingresar').modal('hide');
    }
  });

  /*fin boton agregar*/
});
