$(function() {
    $('#form').disableAutoFill({
        passwordField: '#password'
    });
});




$(document).ready(function () {


    $('#btn_login').click(function () {

    		
		if (
			$('#user').val() == '' ||
			$('#password').val() == '') 
			{
				Swal.fire({
					icon: 'error',
					title: 'Usuario y Contraseña',
					position: 'top',
					text: 'Campos Obligatorios'
				})

				return false;

			}


    })

})



