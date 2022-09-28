<?php
$date = date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Persona</title>
</head>
<body>
<?php include_once "Estructura/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="mx-auto mt-3">

            <h3>Agregar Persona</h3>
            <form class="row gx-3 align-items-center needs-validation" id="Persona" action="accion/accionNuevaPersona.php" method="get" novalidate>
                <div class="col-4 mb-3">
                    <label for="NroDni" class="form-label">Ingrese DNI</label>
                    <input class="form-control " type="text" name="NroDni" id="NroDni" pattern="[0-9]{8}" maxlength="8" placeholder="Ej: 23456789" required>
                    <div class="valid-feedback">Check!</div>
                    <div class="invalid-feedback">Campo necesario, Ej: 23456789</div>
                </div>
                <br>
                <div class="col-4 mb-3">
                    <label for="Apellido" class="form-label">Apellido</label>
                    <input class="form-control" type="text" name="Apellido" id="Apellido" maxlength="20" placeholder="Ej: Lopez" required>
                    <div class="valid-feedback">Check!</div>
                    <div class="invalid-feedback">Campo necesario, Ej: Lopez</div>

                </div>
                <br>
                <div class="col-4 mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input class="form-control" type="text" name="Nombre" id="Nombre" maxlength="20" placeholder="Ej: Ignacio" required>
                    <div class="valid-feedback">Check!</div>
                    <div class="invalid-feedback">Campo necesario, Ej: dylan</div>

                </div>
                <br>
                <div class="col-4 mb-3">                  
                    <label for="fechaNac" class="form-label">Fecha Nacimiento</label>
                    <input class="form-control" type="date" name="fechaNac" id="fechaNac" min="1900-01-01" max="<?php echo $date ?>" required>
                    <div class="valid-feedback">Check!</div>
                    <div class="invalid-feedback">Campo necesario</div>

                </div>
                <br>
                <div class="col-4 mb-3">                  
                    <label for="Telefono" class="form-label">Telefono</label>
                    <input class="form-control" type="text" name="Telefono" id="Telefono" pattern="[0-9]{10}" maxlength="10" placeholder="Ej: 2993456789" required>
                    <div class="valid-feedback">Check!</div>
                    <div class="invalid-feedback">Campo necesario, Ej: 2991234567</div>

                </div>
                <br>
                <div class="col-4 mb-3">                   
                    <label for="Domicilio" class="form-label">Domicilio</label>
                    <input class="form-control" type="text" name="Domicilio" id="Domicilio" maxlength="20" placeholder="Ej: Rivadavia 800" required>
                    <div class="valid-feedback">Check!</div>
                    <div class="invalid-feedback">Campo necesario, Ej: Rivadavia 800</div>

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
<?php include_once "Estructura/footer.php"; ?>

</body>

<script src="js/verifPersona.js"></script>

</html>