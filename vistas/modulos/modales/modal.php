
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Grabaciones</title>
  </head>
  <body>
    

    <div class="container-fluid">
        
    <!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">VENTAS EN FRIO</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body" id="grabaciones">
              
                <div class="row">

                    <div class="col-lg-3">
                    <div class="form-group">
                    <label for="" class="col-form-label"><strong>SESSION ID</strong></label>
                    <input type="text" class="form-control" id="session_id" style="background: #C9D218 !important;" disabled>
                    </div>

                    </div>
                    <div class="col-lg-3">
                    <div class="form-group">
                    <label for="" class="col-form-label"><strong>PHONE</strong></label>
                    <input type="text" class="form-control" id="phone" style="background: #C9D218 !important;" disabled>
                    </div> 
                    </div>    

                    <div class="col-lg-3">
                    <div class="form-group">
                    <label for="" class="col-form-label"><strong>CAMPAÑA</strong></label>
                    <input type="text" class="form-control" id="campana_g" style="background: #C9D218 !important;" disabled>
                    </div> 
                    </div> 

                    <div class="col-lg-3">
                    <div class="form-group">
                    <label for="" class="col-form-label"><strong>FECHA Y HORA DE GRABACION</strong></label>
                    <input type="text" class="form-control" id="fecha_grabacion" style="background: #C9D218 !important;" disabled>
                    </div> 
                    </div> 

                </div>

                <div class="row">

                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>FECHA</strong></label>
                      <input type="text" class="form-control" id="fecha" style="background: #C9D218 !important;" disabled>
                      </div>

                      </div>
                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>NOMBRE AGENTE</strong></label>
                      <input type="text" class="form-control" id="nombre_agente" style="background: #C9D218 !important;" disabled>
                      </div> 
                      </div>    

                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>RUT AGENTE</strong></label>
                      <input type="text" class="form-control" id="rut_agente" style="background: #C9D218 !important;" disabled>
                      </div> 
                      </div> 

                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>FECHA DE INGRESO</strong></label>
                      <input type="text" class="form-control" id="fecha_ingreso" style="background: #C9D218 !important;" disabled>
                      </div> 
                      </div> 

                </div>

                <div class="row">

                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>HORA INGRESO</strong></label>
                      <input type="text" class="form-control" id="hora_ingreso" style="background: #C9D218 !important;" disabled>
                      </div>

                      </div>
                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>PCS</strong></label>
                      <input type="text" class="form-control" id="pcs" style="background: #C9D218 !important;" disabled>
                      </div> 
                      </div>    

                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>TIPO</strong></label>
                      <input type="text" class="form-control" id="tipo" style="background: #C9D218 !important;" disabled>
                      </div> 
                      </div> 

                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>CAMPAÑA MOVIL</strong></label>
                      <input type="text" class="form-control" id="campana_t" style="background: #C9D218 !important;" disabled>
                      </div> 
                      </div> 

                </div>
                <div class="row">

                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>PRODUCTO</strong></label>
                      <input type="text" class="form-control" id="producto" style="background: #C9D218 !important;" disabled>
                      </div>
                      </div>

                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>TIPO CLIENTE</strong></label>
                      <input type="text" class="form-control" id="tipo_cliente" style="background: #C9D218 !important;" disabled>
                      </div> 
                      </div>

                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>RUT CLIENTE</strong></label>
                      <input type="text" class="form-control" id="rut_cliente" style="background: #C9D218 !important;" disabled>
                      </div> 
                      </div>

                      <div class="col-lg-3">
                      <div class="form-group">
                      <label for="" class="col-form-label"><strong>DNI CLIENTE</strong></label>
                      <input type="text" class="form-control" id="dni_cliente" style="background: #C9D218 !important;" disabled>
                      </div> 
                      </div> 

                </div>

                    <div style="text-align: center; margin-top: 20px;" data-toggle="tooltip" title="Reproducir">

                        <h5><strong>GRABACION DE LA LLAMADA</strong></h5>
                        
                        <audio controls id="valor">
                            <source src=""  type="audio/ogg">
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