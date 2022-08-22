<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
    <link rel="stylesheet" href="../../../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<body>
    
</body>
</html>

<h3>Datos personales</h3>

<form id="presentacion" name="presentacion" method="get" action="../control/pagina.php" class="row g-3 needs-validation" novalidate>

<div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="" name="nombre" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!--Nombre: <input name="nombre" id="nombre" type="text" /> -->

<div class="col-md-4">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" value="" name="apellido" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!--Apellido: <input name="apellido" id="apellido" type="text" /> -->

<div class="col-md-4">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" value="" name="edad" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!--Edad: <input name="edad" id="edad" type="number" /> -->

<div class="col-md-4">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" value="" name="direccion" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!--Direccion: <input name="direccion" id="direccion" type="text" /> -->

<div class="col-12">
     <button class="btn btn-primary" type="submit">Enviar</button>
</div>

<!--    <input type="submit" name="submit" value="Enviar"/> -->


</form>

</body>    

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

</html>


<!--
<form id="vernro" name="vernro" method="post" action="../control/vernumero.php" class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
            <label for="nro1" class="form-label">Numero</label>
            <input type="number" class="form-control" id="nro1" value="0" required>
            <div class="valid-feedback">
              Correcto!
            </div>
          </div>


    <div class="col-12">
         <button class="btn btn-primary" type="submit">Enviar</button>
    </div>

    -->
