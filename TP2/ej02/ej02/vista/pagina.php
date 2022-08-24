<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas diarias de web dinamica</title>
    <link rel="stylesheet" href="../../../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container row">


        <form id="webdinamica" name="webdinamica" method="get" action="../control/pagina.php" class="row g-3 needs-validation" novalidate>

            <div class="col-md-4">
                <label for="dia1" class="form-label">Lunes</label>
                <input type="number" class="form-control" id="dia1" name="dia1" value="0" required>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>

            <!-- Lunes: <input name="dia1" id="dia1" type="number" /><br/> -->

            <div class="col-md-4">
                <label for="dia2" class="form-label">Martes</label>
                <input type="number" class="form-control" id="dia2" name="dia2" value="0" required>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>

            <!-- Martes: <input name="dia2" id="dia2" type="number" /><br/> -->

            <div class="col-md-4">
                <label for="dia3" class="form-label">Miercoles</label>
                <input type="number" class="form-control" id="dia3" name="dia3" value="0" required>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>

            <!-- Miercoles: <input name="dia3" id="dia3" type="number" /><br/> -->

            <div class="col-md-4">
                <label for="dia4" class="form-label">Jueves</label>
                <input type="number" class="form-control" id="dia4" name="dia4" value="0" required>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>

            <!-- Jueves: <input name="dia4" id="dia4" type="number" /><br/> -->

            <div class="col-md-4">
                <label for="dia1" class="form-label">Viernes</label>
                <input type="number" class="form-control" id="dia5" name="dia5" value="0" required>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>

            <!-- Viernes: <input name="dia5" id="dia5" type="number" /><br/> -->


            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>


            <!-- <input type="submit" name="submit" value="Aceptar"/> -->

        </form>

    </div>

</body>

<script src="js/fnt-pag.js"></script>

</html>