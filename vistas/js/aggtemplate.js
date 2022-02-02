$(document).ready(function () {


	$('#btn_ingresar').click(function () {
		
		var contenido = tinymce.get("contenido").getContent();
		if (
			$('#nombre').val() == '' ||
			$('#descripcion').val() == '' ||
			contenido == '') 
			{
				Swal.fire({
					icon: 'error',
					title: 'Todos los campos deben tener contenido',
					position: 'top',
					text: 'Campos Obligatorios'
				})

				return false;

			}else {

				$('#btn_ingresar').attr("disabled", true);

                var nombre = $.trim($("#nombre").val())
				var descripcion = $.trim($("#descripcion").val())
				
				console.log(nombre+' '  +descripcion + ' ' +contenido);
				
				$.ajax({
					type: "POST",
					url: "modelos/include/procesa_agg_template.php",
					data: {nombre,descripcion,contenido},


					success: function (a) {
						if(a==''){
							console.log(a)
							console.log('Error de peso')
						}else{
							console.log(a)
							console.log('Agregado')
							window.location = "template";
							
						}

					}
				});

				return false;
			}

			
	});
})



