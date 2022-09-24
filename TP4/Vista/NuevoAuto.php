<?php
$date = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Vehiculo</title>
</head>

<body>
    <?php include_once "../util/Estructura/header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="mx-auto mt-3">


                <h3>Agregar Vehiculo</h3>
                <form class="row gx-3 align-items-center needs-validation" id="Auto" action="accion/accionNuevoAuto.php" method="get">
                    <div class="col-3 mb-3">

                        <label for="Patente">Ingrese Patente</label>
                        <input class="form-control " type="text" name="Patente" id="Patente" placeholder="ABC 123" pattern="[a-zA-Z0-9\s]{7,9}" maxlength="8" required>
                    </div>
                    <br>
                    <div class="col-3 mb-3">

                        <label for="Marca">Marca</label>
                        <input class="form-control " type="text" name="Marca" id="Marca" required>
                    </div>
                    <br>
                    <div class="col-3 mb-3">

                        <label for="Modelo">Modelo</label>
                        <input class="form-control " type="number" name="Modelo" id="Modelo" required>
                    </div>
                    <br>
                    <div class="col-3 mb-3">

                        <label for="DniDuenio">DNI dueño</label>
                        <input class="form-control " type="number" name="DniDuenio" id="DniDuenio" pattern="[0-9]{8}" maxlength="8" required>
                    </div>
                    <br>
                    <div class="mb-3">
                    <button class="btn btn-secondary" type="reset">Limpiar</button>

                        <button class="btn btn-dark" type="submit">Enviar Datos</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <?php include_once "../util/Estructura/footer.php"; ?>

</body>
<script src="../util/js/verifAuto.js"></script>
</html>