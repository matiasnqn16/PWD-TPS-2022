<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Entradas</title>
    <link rel="stylesheet" href="../../../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
    
</body>
</html>
<form id="entradas" name="entradas" method="get" action="../control/pagina.php" class="row g-3 needs-validation" novalidate>

<h3>Entradas de cine</h3>

<div class="col-md-4">
    <label for="edad" class="form-label">Edad</label>
    <input type="number" class="form-control" id="edad" value=0 name="edad" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!-- Edad: <input name="edad" id="edad" type="text" /><br/> -->

<div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="estudiante" name="estudiante" value="estudiante">
    <label class="form-check-label" for="estuduiante">Estudiante</label>
</div>

<!--        <label><input type="checkbox" id="estudiante" name="estudiante" value="estudiante">Estudiante</label><br> -->

<div class="col-12">
     <button class="btn btn-primary" type="submit">Enviar</button>
     <button class="btn btn-primary" type="reset">Limpiar</button>
</div>

<!--        <input type="submit" name="submit" value="Aceptar"/>
        <input type="reset" name="reset" value="Limpiar"/> -->

</form>


</body>    

<script src="js/fnt-pag.js"></script>


</html>
