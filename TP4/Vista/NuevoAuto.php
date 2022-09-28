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
    <?php include_once "Estructura/header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="mx-auto mt-3">


                <h3>Agregar Vehiculo</h3>
                <form class="row gx-3 align-items-center needs-validation" id="Auto" action="accion/accionNuevoAuto.php" method="get" novalidate>
                    <div class="col-3 mb-3">
                        <label for="Patente" class="form-label">Ingrese Patente</label>
                        <input class="form-control" type="text" name="Patente" id="Patente" placeholder="Ej: ABC 123" pattern="[A-Z]{3}\s[0-9]{3}" maxlength="7" required>
                        <div class="valid-feedback">Check!</div>
                        <div class="invalid-feedback">Campo necesario</div>
                    </div>
                    <div class="col-3 mb-3">

                        <label for="Marca" class="form-label">Marca</label>
                        <input class="form-control" type="text" name="Marca" id="Marca" pattern="[a-zA-Z0-9]" maxlength="20" required>
                        <div class="valid-feedback">Check!</div>
                        <div class="invalid-feedback">Campo necesario</div>

                    </div>
                    <div class="col-3 mb-3">

                        <label for="Modelo" class="form-label">Modelo</label>
                        <input class="form-control" type="number" name="Modelo" id="Modelo" min="20" max="2100" required>
                        <div class="valid-feedback">Check!</div>
                        <div class="invalid-feedback">Campo necesario</div>

                    </div>
                    <div class="col-3 mb-3">

                        <label for="DniDuenio" class="form-label">DNI dueño</label>
                        <input class="form-control " type="number" name="DniDuenio" id="DniDuenio" pattern="[0-9]{8}" maxlength="8" required>
                        <div class="valid-feedback">Check!</div>
                        <div class="invalid-feedback">Campo necesario</div>

                    </div>
                    <div class="mb-3">
                    <button class="btn btn-secondary" type="reset">Limpiar</button>
                    <button class="btn btn-dark" type="submit">Enviar Datos</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <?php include_once "Estructura/footer.php"; ?>

</body>
<script src="js/verifAuto.js"></script>
</html>