<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de usuario</title>

    <link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="modal-dialog-centered">

<!-- Login Form -->
        <form id="getuser" name="getuser" action="../control/verificaPass.php" method="post" class="row g-3 needs-validation" novalidate> 
          <div class="modal-header">
            <h5 class="modal-title">Member Login</h5>
          </div>


          <div class="modal-body">
            <div class="mb-3">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
            </div>

            <div class="mb-3">
<!--                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required> -->
                 <input type="password" id="password" name="password" class="form-control" placeholder="password" pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="debe contener al menos 8 caracteres/alguna letra/algun numero" required>

                 <div class="invalid-feedback">debe contener al menos 8 caracteres/alguna letra/algun numero</div>
             </div>
          </div>
          <div class="modal-footer pt-4">                  
            <button type="submit" class="btn btn-success mx-auto w-100">Login</button>
          </div>
      </form>
      </div>
      </div>


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