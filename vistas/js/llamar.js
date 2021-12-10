$(document).ready(function () {

	$('#btn_llamar').click(function () {

	if (
		$('#phone_agente').val() == '' ||
		$('#email_agente').val() == '' ||
		$('#phone').val() == '' ){

		Swal.fire({
				icon: 'error',
				title: 'FALTA ALGO',
				position: 'top',
				text: 'RELLENE TODOS LOS CAMPOS'
				})

		return false;


	}else{

		$('#btn_llamar').attr("disabled", true);

		var datos = $('#frmllamar').serialize();

			console.log(datos);

			$.ajax({
				type: "POST",
				url: "modelos/include/call.php",
				data: datos,

				success: function (a) {

					Swal.fire({
  						position: 'top',
  						icon: 'success',
  						title: 'LLAMADA REALIZADA CON EXITO',
  						showConfirmButton: false,
  						timer: 3000
					})

						console.log(a);

					}
				});

				return false;

	}


	});
});