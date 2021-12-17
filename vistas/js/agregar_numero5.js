div = document.getElementById('ver_datos');
div.style.display = 'none';

  $(document).ready(function () {

      $("#employee_data").DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
      "order": [
        [2, "desc"]
      ],
      "processing": true,
      "serverSide": true,
      "sAjaxSource": "modelos/serverside/serverside_homologado5.php",
      "columnDefs": [{
        "targets": -1,
        "defaultContent": "<div class='wrapper text-center'><button type='button' class='btn btn-primary btnVer' title='Ver'><i class='fas fa-eye'></i></button></div>"
      }],

      "createdRow": function (row) {

      $('td', row).eq(0).css({
        'display': 'none',
      });
      $('td', row).eq(1).css({
        'display': 'none',
      });
      $('td', row).eq(6).css({
        'display': 'none',
      });
      $('td', row).eq(7).css({
        'display': 'none',
      });
      $('td', row).eq(8).css({
        'display': 'none',
      });
      $('td', row).eq(9).css({
        'display': 'none',
      });
      $('td', row).eq(10).css({
        'display': 'none',
      });
      $('td', row).eq(11).css({
        'display': 'none',
      });
      $('td', row).eq(12).css({
        'display': 'none',
      });
      $('td', row).eq(13).css({
        'display': 'none',
      });
      $('td', row).eq(14).css({
        'display': 'none',
      });
      $('td', row).eq(15).css({
        'display': 'none',
      });
      $('td', row).eq(16).css({
        'display': 'none',
      });
      $('td', row).eq(17).css({
        'display': 'none',
      });
      $('td', row).eq(18).css({
        'display': 'none',
      });
      $('td', row).eq(19).css({
        'display': 'none',
      });
      $('td', row).eq(20).css({
        'display': 'none',
      });
      $('td', row).eq(21).css({
        'display': 'none',
      });
      $('td', row).eq(22).css({
        'display': 'none',
      });
      $('td', row).eq(23).css({
        'display': 'none',
      });
      $('td', row).eq(24).css({
        'display': 'none',
      });
      $('td', row).eq(25).css({
        'display': 'none',
      });
      $('td', row).eq(26).css({
        'display': 'none',
      });
      $('td', row).eq(27).css({
        'display': 'none',
      });
      $('td', row).eq(28).css({
        'display': 'none',
      });
      $('td', row).eq(29).css({
        'display': 'none',
      });
      $('td', row).eq(30).css({
        'display': 'none',
      });
      $('td', row).eq(31).css({
        'display': 'none',
      });
      $('td', row).eq(32).css({
        'display': 'none',
      });
      $('td', row).eq(33).css({
        'display': 'none',
      });
  
    }

   

    });


  

    $(document).on("click", ".btnVer", function(){	


      div = document.getElementById('tipificacion');
      div.style.display = 'none';

      div = document.getElementById('ver_datos');
      div.style.display = '';
      
       fila = $(this).closest("tr");	        

      nombre_agente = fila.find('td:eq(0)').text();
      rut_usuario = fila.find('td:eq(1)').text();
      fecha_hora_ingreso = fila.find('td:eq(2)').text();
      pcs = fila.find('td:eq(3)').text();
      session_id = fila.find('td:eq(4)').text();
      tipo = fila.find('td:eq(5)').text();
      campana_t = fila.find('td:eq(6)').text();
      producto = fila.find('td:eq(7)').text();
      rut_cliente = fila.find('td:eq(8)').text();
      tipo_cliente = fila.find('td:eq(9)').text();
      dni_cliente = fila.find('td:eq(10)').text();
      nombre_cliente = fila.find('td:eq(11)').text();
      fecha_ingreso = fila.find('td:eq(12)').text(); 
      hora_ingreso = fila.find('td:eq(13)').text();
      empresa = fila.find('td:eq(14)').text();
      apellido_cliente = fila.find('td:eq(15)').text();
      fecha_nacimiento = fila.find('td:eq(16)').text();
      edad = fila.find('td:eq(17)').text();
      sexo = fila.find('td:eq(18)').text();
      email = fila.find('td:eq(19)').text();
      direccion = fila.find('td:eq(20)').text();
      accion = fila.find('td:eq(21)').text();
      cantidad = fila.find('td:eq(22)').text();
      forma_entrega = fila.find('td:eq(23)').text();
      sucursal = fila.find('td:eq(24)').text();
      region = fila.find('td:eq(25)').text();
      ciudad = fila.find('td:eq(26)').text();
      observacion = fila.find('td:eq(27)').text();
      sub_producto = fila.find('td:eq(28)').text();
      ciclo_fact = fila.find('td:eq(29)').text();
      fact_pendiente = fila.find('td:eq(30)').text();
      periodo_fact = fila.find('td:eq(31)').text();
      fecha_cpago = fila.find('td:eq(32)').text();
      canal_pago = fila.find('td:eq(33)').text();


      $("#nombre_agente2").val(nombre_agente);
      $("#rut_usuario").val(rut_usuario);
      $("#fecha_hora_ingreso").val(fecha_hora_ingreso);
      $("#pcs").val(pcs);
      $("#session_id").val(session_id);
      $("#tipo").val(tipo);
      $("#campana_t").val(campana_t);
      $("#producto").val(producto);
      $("#rut_cliente").val(rut_cliente);
      $("#tipo_cliente").val(tipo_cliente);
      $("#dni_cliente").val(dni_cliente);
      $("#nombre_cliente").val(nombre_cliente);
      $("#fecha_ingreso").val(fecha_ingreso);
      $("#hora_ingreso").val(hora_ingreso);
      $("#empresa").val(empresa);
      $("#apellido_cliente").val(apellido_cliente);
      $("#fecha_nacimiento").val(fecha_nacimiento);
      $("#edad").val(edad);
      $("#sexo").val(sexo);
      $("#email").val(email);
      $("#direccion").val(direccion);
      $("#accion").val(accion);
      $("#cantidad").val(cantidad);
      $("#forma_entrega").val(forma_entrega);
      $("#sucursal").val(sucursal);
      $("#region").val(region);
      $("#ciudad").val(ciudad);
      $("#observacion").val(observacion);
      $("#sub_producto").val(sub_producto);
      $("#ciclo_fact").val(ciclo_fact);
      $("#fact_pendiente").val(fact_pendiente);
      $("#periodo_fact").val(periodo_fact);
      $("#fecha_cpago").val(fecha_cpago);
      $("#canal_pago").val(canal_pago);

     });

    

  });
