
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>SERVICIO MOVIL OUTBOUNT</title>
  </head>
  <body>
    

    <div class="container-fluid">
        
    <!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SERVICIO MOVIL OUTBOUNT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body" id="">

                <div class="row border border-secondary rounded mx-0 shadow-sm py-3 fondo_cuadro">

                    <div class="row">

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Nombre Agente</strong></label>
                        <input type="text" class="form-control" id="nombre_agente" disabled>
                        </div> 
                        </div> 

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Rut Usuario</strong></label>
                        <input type="text" class="form-control" id="rut_usuario" disabled>
                        </div>

                        </div>
                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Campaña</strong></label>
                        <input type="text" class="form-control" id="campana_t" disabled>
                        </div> 
                        </div>    

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Tipo Cliente</strong></label>
                        <input type="text" class="form-control" id="tipo_cliente" disabled>
                        </div>
                        </div>

                        


                    </div>

                    <div class="row">


                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Rut Cliente</strong></label>
                        <input type="text" class="form-control" id="rut_cliente" disabled>
                        </div> 
                        </div> 


                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>DNI Cliente</strong></label>
                        <input type="text" class="form-control" id="dni_cliente" disabled>
                        </div> 
                        </div>    

                        

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Nombre Cliente</strong></label>
                        <input type="text" class="form-control" id="nombre_cliente" disabled>
                        </div> 
                        </div> 

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Apellido Cliente</strong></label>
                        <input type="text" class="form-control" id="apellido_cliente" disabled>
                        </div>
                        </div>

                    </div>

                    <div class="row">

                        

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Empresa</strong></label>
                        <input type="text" class="form-control" id="empresa" disabled>
                        </div> 
                        </div> 


                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Fecha Ingreso</strong></label>
                        <input type="text" class="form-control" id="fecha_ingreso" disabled>
                        </div> 
                        </div>    

                        

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Hora Ingreso</strong></label>
                        <input type="text" class="form-control" id="hora_ingreso" disabled>
                        </div> 
                        </div> 

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Fecha Nacimiento</strong></label>
                        <input type="text" class="form-control" id="fecha_nacimiento" disabled>
                        </div>
                        </div>

                    </div>

                    <div class="row">

                       

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Edad</strong></label>
                        <input type="text" class="form-control" id="edad" disabled>
                        </div> 
                        </div> 


                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Sexo</strong></label>
                        <input type="text" class="form-control" id="sexo" disabled>
                        </div> 
                        </div>    

                        

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Email</strong></label>
                        <input type="text" class="form-control" id="email" disabled>
                        </div> 
                        </div> 

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Dirección</strong></label>
                        <input type="text" class="form-control" id="direccion" disabled>
                        </div> 
                        </div>

                    </div>

                </div>


                <div class="row border border-secondary rounded mx-0 shadow-sm py-3 fondo_cuadro"  style="margin-top: 10px;">

                    <div class="row">

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Tipo</strong></label>
                        <input type="text" class="form-control" id="tipo" disabled>
                        </div> 
                        </div> 

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Acción</strong></label>
                        <input type="text" class="form-control" id="accion" disabled>
                        </div>
                        </div>
                        
                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Producto</strong></label>
                        <input type="text" class="form-control" id="producto" disabled>
                        </div> 
                        </div>  

                        

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Cantidad</strong></label>
                        <input type="text" class="form-control" id="cantidad" disabled>
                        </div> 
                        </div> 

                    </div>

                    <div class="row">

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Forma Entrega</strong></label>
                        <input type="text" class="form-control" id="forma_entrega" disabled>
                        </div>
                        </div>

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Sucursal</strong></label>
                        <input type="text" class="form-control" id="sucursal" disabled>
                        </div> 
                        </div> 


                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Región</strong></label>
                        <input type="text" class="form-control" id="region" disabled>
                        </div> 
                        </div>    

                        

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Ciudad</strong></label>
                        <input type="text" class="form-control" id="ciudad" disabled>
                        </div> 
                        </div> 

                    </div>

                    <div class="row">

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Dirección Entrega</strong></label>
                        <input type="text" class="form-control" id="direccion_entrega" disabled>
                        </div>
                        </div>

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Tipo Venta</strong></label>
                        <input type="text" class="form-control" id="tipo_venta1" disabled>
                        </div> 
                        </div> 


                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Origen</strong></label>
                        <input type="text" class="form-control" id="origen" disabled>
                        </div> 
                        </div>    

                        

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label"><strong>Número Orden</strong></label>
                        <input type="text" class="form-control" id="numero_orden" disabled>
                        </div> 
                        </div> 

                    </div>

                </div>
              
            
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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