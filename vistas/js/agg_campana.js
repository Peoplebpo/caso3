$(document).ready(function () {
  var id, opcion;

  var fila; //captura la fila, para editar o eliminar
  //submit para el Alta y Actualización
  $("#formemail").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    nombre = $.trim($("#nombre").val());
    if(nombre==''){
      console.log(nombre2)
      Swal.fire({
        icon: "error",
        title: "Seleccione una campaña.",
        text: "Verificar la Campaña.",
      });
      return
    }
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
          $("#formemail")[0].reset();
          Swal.fire("Felicidades", "Campaña Agregada con Exito", "success")
          .then(function(){
            $('#agregarC').hide();
            $('.modal-backdrop').hide();
          });
        }
      },
    });
  });
  /*$(document).on("click", "#nombre1", function () {
    opcion=5
    $.ajax({
      url: "modelos/include/crud.php",
      type: "POST",
      datatype: "json",
      data: {opcion},
      success:function(data) {
        console.log(data)
        let taskss = JSON.parse(data);
        let templates = '<option value="0">Seleccione:</option>';
        taskss.forEach(tasks => {
          templates += `<option value="${tasks.id}">${tasks.nombre}</option>`
        })
        $('#nombre1').html(templates)
      }
    })
  })*/


  /***************            Codigo para actualizar los selecs */
  $(document).on("click", "#eliminar", function () {
    opcion=5
    $.ajax({
      url: "modelos/include/crud.php",
      type: "POST",
      datatype: "json",
      data: {opcion},
      success:function(data) {
        console.log(data)
        let taskss = JSON.parse(data);
        let templates = '<option value="0">Seleccione:</option>';
        taskss.forEach(tasks => {
          templates += `<option value="${tasks.id}">${tasks.nombre}</option>`
        })
        $('#eliminarC').modal('show');
        $('#nombre1').html(templates)
      }
    })
  })
$(document).on("click", "#subir_email1", function () {
  opcion=5
  $.ajax({
    url: "modelos/include/crud.php",
    type: "POST",
    datatype: "json",
    data: {opcion},
    success:function(data) {
      console.log(data)
      let taskss = JSON.parse(data);
      let templates = '<option value="0">Seleccione una Campaña:</option>';
      taskss.forEach(tasks => {
        templates += `<option value="${tasks.nombre}">${tasks.nombre}</option>`
      })
      $('#subir_email').modal('show');
      $('#nombre2').html(templates)
    }
  })
  
})


  $("#subir_email").submit(function (e) {
    e.preventDefault();
    nombre2 = $.trim($("#nombre2").val())
    if(nombre2=='0'){
      console.log(nombre2)
      Swal.fire({
        icon: "error",
        title: "Seleccione una campaña.",
        text: "Verificar la Campaña.",
      });
      return
    }
    if(document.getElementById('sel_file').files.length==0){
      console.log(nombre2)
      Swal.fire({
        icon: "error",
        title: "Seleccione un archivo.",
        text: "Verificar el archivo.",
      });
      return
    }
    var fd = new FormData()
    fd.append("nombre2", nombre2)
    fd.append("sel_file", sel_file.files[0])
    fd.append("opcion", 6)
    $.ajax({
      url: "modelos/include/crud.php",
      type: "POST",
      data: fd,
      processData: false,  
      contentType: false, 
      success: function(data){
          console.log(data)
          templates2=' '+data[0].primero + "" + " " + data[0].segundo + " numeros"
          

        let taskss = JSON.parse(data);
        let templates = '<option value="0">Seleccione:</option>';
        taskss.forEach(tasks => {
          templates += `<small class="resultados_importacion_ex">Nombre del archivo cargado: ${tasks.primero} Importaci&oacute;n exitosa!   <img class='ok' src='https://i.ibb.co/xFvRww2/ok.png' width='20'><br>Se han cargado ${tasks.segundo} numeros`
        })
        $('#resultado').html(templates)
        console.log(templates)
      }
  })
    console.log(fd)
  })

});

