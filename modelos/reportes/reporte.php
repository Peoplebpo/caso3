
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Reportes</title>
  </head>
  <body>
     <!-- Inicio Modal exportar csv -->

     
    <div class="container-fluid my-3">

        <div class="row">

            <div class="col d-grid gap-2 d-md-flex justify-content-md-end">

                <button type="button" class="btn btn-success" data-bs-target="#exp_reporte2_csv" data-bs-toggle="modal">Reporte</button>

            </div>

        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exp_reporte2_csv" tabindex="-1" aria-labelledby="exp_reporte2_csv" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content" style="width: 600px;">
                        <div class="modal-header">
                            <h4>REPORTE GENERAL</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="height: 80px; width: 600px;">

                            <form action="modelos/filtros/filtro_fecha.php" method="POST">

                                <div style="float: left;">

                                    <label><strong>Inicio</strong></label>

                                    <input type="date" name="min" size="10" style="border-radius: 5px !important; background: #C9D218 !important;">

                                </div>

                                <div style="float: left; margin-left: 20px;">
                                    <label><strong>Fin</strong></label>

                                    <input type="date" name="max" size="10" style="border-radius: 5px !important; background: #C9D218 !important;">

                                </div>

                                <div style="float: right;">

                                    <button type="submit" class="btn btn-success"
                                        style="margin-left: 10px;">EXPORTAR</button>

                                </div>

                            </form>

                        </div>
                        <div class="modal-footer">
                            Filtrar por Fecha
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
