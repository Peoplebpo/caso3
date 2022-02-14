<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../../vistas/css/main.css">
    <link rel="stylesheet" href="../css/main.css">

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
            <div class="modal-content">
                <div class="modal-header" id="lm" style="font-family: geometria, sans-serif;">
                    <h5>REPORTE GENERAL (Filtrar por Fecha)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="modelos/filtros/filtro_fecha2.php" method="POST">


                        <div class="row">

                            <div class="col-lg-6">

                                <label><strong>Inicio</strong></label>

                                <input type="date" name="min" style="border-radius: 5px !important; background: #C9D218 !important;">

                            </div>

                            <div class="col-lg-6">

                                <label><strong>Fin</strong></label>

                                <input type="date" name="max" style="border-radius: 5px !important; background: #C9D218 !important;">

                            </div>

                        </div>

                        <div style="padding: 10px;" class="d-flex justify-content-end align-items-end">
                            <button style="border-radius: 20px !important; font-family: geometria, sans-serif; font-size: 1rem; background-color: #322a46 !important; color: #C8D118;" type="submit" class="btn shadow-none">EXPORTAR</button>
                        </div>

                    </form>

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