$(document).ready(function () {



	$('#btn_ingresar').click(function () {

		var fecha 		= $("#fecha_nacimiento").val();
		var fecha2 		= fecha.length;


		if ($('#tipo_cliente').val() == 'chileno') {


			if ($('#CustLoginIDAux').val() == '')

				 {
					Swal.fire({
						icon: 'error',
						title: 'RUT CLIENTE',
						position: 'top',
						text: 'Campo Obligatorio'
					})
	
					return false;

			}
		
		}
		
		if ($('#tipo_cliente').val() == 'extranjero'){

			if ($('#dni_cliente').val() == '')

				{
					Swal.fire({
						icon: 'error',
						title: 'DNI CLIENTE',
						position: 'top',
						text: 'Campo Obligatorio'
					})
	
					return false;

				}

		}
		
		if (
			$('#pcs').val() == '' ||
			$('#nombre_cliente').val() == '' ||
			$('#apellido_cliente').val() == '' ||
			$('#sexo').val() == '' ||
			$('#direccion').val() == '' ||
			$('#observacion').val() == '' ||
			$('#ciclo_fact').val() == '' ||
			$('#fact_pendiente').val() == '' ||
			$('#periodo_fact').val() == '' ||
			$('#canal_pago').val() == '' ||
			$('#edad').val() == '') 
			{
				Swal.fire({
					icon: 'error',
					title: 'Falta Algo',
					position: 'top',
					text: 'Campos Obligatorios'
				})

				return false;
			}else if (fecha2 == 0) {

				Swal.fire({
					icon: 'error',
					position: 'top',
					title: 'CAMPO FECHA',
					text: 'NO ES CORRECTO O VALIDO'
				})

				return false;

			}else if ($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {

				Swal.fire({
					icon: 'error',
					position: 'top',
					title: 'CAMPO CORREO ELECTRÓNICO',
					text: 'NO ES CORRECTO O VALIDO'
				})

				return false;

			}

			if ($('#forma_entrega').val() == 'r_tienda') {


				if ($('#sucursal').val() == '')
	
					 {
						Swal.fire({
							icon: 'error',
							title: 'SUCURSAL',
							position: 'top',
							text: 'Campo Obligatorio'
						})
		
						return false;
	
				}
			
			}

			if ($('#forma_entrega').val() == 'delivery') {

				if ($('#region').val() == '')
	
					 {
						Swal.fire({
							icon: 'error',
							title: 'REGIÓN',
							position: 'top',
							text: 'Campo Obligatorio'
						})
		
						return false;
	
				}


				if ($('#ciudad').val() == '')
	
					 {
						Swal.fire({
							icon: 'error',
							title: 'CIUDAD',
							position: 'top',
							text: 'Campo Obligatorio'
						})
		
						return false;
	
				}


				if ($('#direccion_entrega').val() == '')
	
					 {
						Swal.fire({
							icon: 'error',
							title: 'DIRECCIÓN ENTREGA',
							position: 'top',
							text: 'Campo Obligatorio'
						})
		
						return false;
	
				}
			
			}

			if ((
				$('#producto').val() != '' ||
				$('#sub_producto').val() != '' ) &&
				$('#cantidad').val() == '')
				{
					Swal.fire({
						icon: 'error',
						title: 'Debe ingresar Producto',
						position: 'top',
						text: 'Campos Obligatorios (Producto o Sub Producto y Cantidad)'
					})
	
					return false;
				}

				if ((
					$('#tipo').val() != '' ||
					$('#accion').val() != '' ) &&
					$('#fecha_cpago').val() !== '')
					{
						Swal.fire({
							icon: 'error',
							title: 'Campo Obligatorio',
							position: 'top',
							text: 'Campos Obligatorios (Tipo, Accion y Fecha Compromiso de Pago)'
						})
		
						return false;
					}

			if (

				$('#cantidad').val() == '' ||
				$('#observacion').val() == '' ||
				$('#ciclo_fact').val() == '' ||
				$('#fact_pendiente').val() == '' ||
				$('#periodo_fact').val() == '') 
				{
					Swal.fire({
						icon: 'error',
						title: 'Falta Algo',
						position: 'top',
						text: 'Campos Obligatorios'
					})
	
					return false;
				}else {

					$('#btn_ingresar').attr("disabled", true);
	
					var datos = $('#frmingresar').serialize();
	
					console.log(datos);
					
					$.ajax({
						type: "POST",
						url: "modelos/include/procesa_ingresar_registro.php",
						data: datos,
	
	
						success: function (a) {
	
							console.log(a);
	
	
							window.location = "administrador";
	
	
						}
					});
	
					return false;
				}

	});
})



