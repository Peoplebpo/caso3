$("#btnSubmitm").click(function() {
    console.log("ok");
        var n=1;

        $(this).prop("disabled", true); //deshabilitamos el botón
        $(this).html(
        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Cargando Datos` //añadimos el spinner
        );

        $.ajax ({
            type:"POST",
            url:"../../vistas/modulos/sms1.php",
            datatype:{"n":"n"},
            success: function (a) {
                if (a=2){
                    $("#btnSubmitm").prop("disabled", false); 
                    $("#btnSubmitm").html(
                    `<span></span> Datos Cargados` //añadimos el spinner
                    );
                    $("#btnSubmitm").prop("disabled", true); 
                    $("#btnSubmitm").removeClass('btn-primary').addClass('btn-success');
                    console.log(a)
                }
                
            },

        });
        
    });

        // $(document).ready(function(){

        //     $("#btnSubmit").on("click", function(){

        //         $.ajax({
        //             type:"POST",
        //             url:"numero.php",
        //             datatype:{"n":"n"},

        //             beforeSend: function(){
        //                 $("#cargando").show();
        //             },

        //             complete: function(){
        //                 $("#cargando").hide();
        //             },

        //             success: function(data){
        //                 var output ="";
        //                 for(var i in data){
        //                     output +=`
        //                     <ul>
        //                         <li>Id ${data[i].id}</li>
        //                         <li>Name ${data[i].name}</li>
        //                     </ul>
        //                     `;
        //                 }
        //                 $("#resultdo").html(output);
        //             },
        //             error: function(){
        //                 $("#resultado").html("error al obtener los datos");
        //             }
        //         });

        //     });
        // })
  
