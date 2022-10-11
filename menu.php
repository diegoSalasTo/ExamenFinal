<?php
session_start();
require_once('assets/funcion/funcion.php');
if (!isLogged()) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class='container-fluid' style='padding-right: 20%;'>
    <h1>Agregar nuevo departamento</h1>
    <hr>
    <div class='container-fluid'>
        <form id="formulario">
            <div class="row">
                <div class='col-md-6'>
                    <label for="Titulo" class="form-label">Titulo:</label>
                    <input type="text" name="TituloTxt" id="TituloTxt" autocomplete="off" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="number" name="PrecioTxt" id="PrecioTxt" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="Descripcion">Descripcion:</label>
                    <input type="text" name="DescripcionTxt" id="DescripcionTxt" autocomplete="off" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="Habitaciones">Habitaciones:</label>
                    <input type="number" name="HabitacionesTxt" id="HabitacionesTxt" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label for="Estacionamiento">Estacionamiento:</label>
                <input type="number" name="EstacionamientoTxt" id="EstacionamientoTxt" autocomplete="off" class="form-control">
            </div>
            <button id="boton" class="btn btn-primary">Agregar</button>

        </form>
        <table class='table table-hover table-striped table-bordered'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Habitaciones</th>
                    <th>Estacionamiento</th>
                </tr>
            </thead>
            <tbody id="tblData">

            </tbody>
        </table>
        </div>
</div>
    <script src="assets/js/inmobiliaria.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/agregar.js"></script>

</body>

</html>