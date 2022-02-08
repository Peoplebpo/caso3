<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="vistas/css/main.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link href="http://fonts.cdnfonts.com/css/geometria" rel="stylesheet">
 

  <title>login</title>
</head>

<body  style="background-color: #363050;">
  <div class="container-fluid d-flex justify-content-center align-items-center" id="cont">


    <form id="form" method="post" autocomplete="off">

      <img src="vistas/img/logo.png" alt="" class="container-fluid d-flex justify-content-center align-items-center img-fluid" style="width: 250px;">

      <div class="container">

        <div class="mb-3 input-group" style="margin-top: 30px;">
          <span style="background-color: white; border-radius: 25px;" class="input-group-text" id="span"><i style="color: #C8D118;" class="fa fa-user form-control-feedback"></i>
            <input id="louser" name="user" id="user" type="text" class="form-control shadow-none" placeholder="Usuario" style="font-family: geometria, sans-serif;">

        </div>

        <div class="mb-3 input-group" style="margin-top: 30px;">
          <span style="background-color: white; border-radius: 25px;" class="input-group-text"><i style="color: #C8D118;" class="fa fa-lock"></i>
            <input name="password" id="password" type="text" class="form-control shadow-none" style="font-family: geometria, sans-serif; color: blue ;" placeholder="Contraseña">

        </div>


        <div class="d-grid gap-2">
          <button id="btn_login" style="margin-top: 25px; border-radius: 20px !important; font-family: geometria, sans-serif; font-size: 1.5rem; background-color:#C8D118 !important; color: #322A46;" class="btn btn-primary shadow-none" type="submit">Ingresar</button>

        </div>
      </div>

    </form>

    <?php
    $login = new ControladorLogin();
    $login->clogin();

    ?>


  </div>




  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/disableautofill/src/jquery.disableAutoFill.min.js"></script>
  <script type="text/javascript" src="vistas/js/login.js"></script>
</body>

</html>