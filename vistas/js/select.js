$(document).ready(function(){
    $("#producto").change(function () {          
      $("#producto option:selected").each(function () {
        producto = $(this).val();
        $.post("modelos/include/select.php", { producto: producto }, function(data){
          $("#sub_producto").html(data);
        });            
      });
    })
  })