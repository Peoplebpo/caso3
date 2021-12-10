<?php
if (isset($_SESSION["user"])) {

    $rut_usuario = $_SESSION["rut_usuario"];
    $nombre      =$_SESSION["nombre"];
   

}else{

//   header('location: ../../../login/session.html');

  exit;

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="vistas/js/llamar.js"></script>

    <title>INGRESAR LLAMADA</title>
  </head>
  <body>


    <!-- Modal -->
 

    <div class="modal" tabindex="-1" id="mllamada" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">LLAMAR REFERIDO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <form action="" method="POST" accept-charset="ISO-8859-1" id="frmllamar">

                            <label>Telefono del Referido</label>
                            <input type="number" name="phone" id="phone" value="" class="form-control my-2" placeholder="Telefono del Referido">

                            <label>Telefono del Agente</label>
                            <input type="number" name="phone_agente" id="phone_agente" value="" class="form-control my-2" placeholder="Telefono del Agente">

                            <label>Email del Agente</label>
                            <input type="email" name="email_agente" id="email_agente" value="" class="form-control my-2" placeholder="Email del Agente" > 

                            <input type="hidden" name="nombre_agente" id="nombre_agente" value="<?php echo $nombre; ?>">
                            <input type="hidden" name="rut_agente" id="rut_agente" value="<?php echo $rut_usuario; ?>">
                        </form>

                    </div>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-info w-100 text-white" name="btn_llamar" id="btn_llamar" value="Llamar Referido">
                    </div>
                
                </div>
        </div>

    </div>
    

    <!-- Fin Modal exportar csv -->

    

  

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
 
  </body>

</html>


 