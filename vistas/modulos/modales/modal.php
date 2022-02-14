<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/geometria" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">

    <title>Grabaciones</title>
</head>

<body>


    <div class="container-fluid">

        <!--Modal para CRUD-->
        <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header" id="lm" style="font-family: geometria, sans-serif;">
                        <h5 class="modal-title" id="exampleModalLabel">COBRANZA CLIENTE</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <div class="modal-body" id="grabaciones" style="font-family: geometria, sans-serif;">

                        <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">SESSION ID</label>
                                    <input type="text" class="form-control" id="session_id" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">PHONE</label>
                                    <input type="text" class="form-control" id="phone" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">CAMPAÑA</label>
                                    <input type="text" class="form-control" id="campana_g" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">FECHA Y HORA DE GRABACION</label>
                                    <input type="text" class="form-control" id="fecha_grabacion" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">FECHA</label>
                                    <input type="text" class="form-control" id="fecha" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">NOMBRE AGENTE</label>
                                    <input type="text" class="form-control" id="nombre_agente" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">RUT AGENTE</label>
                                    <input type="text" class="form-control" id="rut_agente" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">FECHA DE INGRESO</label>
                                    <input type="text" class="form-control" id="fecha_ingreso" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">HORA INGRESO</label>
                                    <input type="text" class="form-control" id="hora_ingreso" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">PCS</label>
                                    <input type="text" class="form-control" id="pcs" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">TIPO</label>
                                    <input type="text" class="form-control" id="tipo" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">CAMPAÑA MOVIL</label>
                                    <input type="text" class="form-control" id="campana_t" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">PRODUCTO</label>
                                    <input type="text" class="form-control" id="producto" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">TIPO CLIENTE</label>
                                    <input type="text" class="form-control" id="tipo_cliente" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">RUT CLIENTE</label>
                                    <input type="text" class="form-control" id="rut_cliente" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="col-form-label">DNI CLIENTE</label>
                                    <input type="text" class="form-control" id="dni_cliente" style=" border-radius: 20px; background-color: #363050!important; color:white;" disabled>
                                </div>
                            </div>

                        </div>

                        <div class="stop" style="text-align: center; margin-top: 20px;" data-toggle="tooltip" title="Reproducir">

                            <h5>GRABACION DE LA LLAMADA</h5>

                            <audio class="stop" controls id="valor">
                                <source src="" type="audio/ogg">
                            </audio>

                        </div>


                    </div>

                </div>
            </div>
        </div>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>

</html>