(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')


    var data = document.getElementById('Patente')
    data.addEventListener("keyup", function () {
        var a = data.value
        if (a.match(/[a-zA-Z]/) === null) {
            data.value = ""
        }
        if (a.length === 3) {
            data.value = a.toUpperCase() + " "
        }
        if (a.length === 5) {
            var b = a[4]
            if (b.match(/[0-9]/) === null) {
                data.value = ""
            }
        }
    }, false)
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
  
          /* 
          Cuando se invoca el método checkValidity (), si el elemento es candidato para la validación de restricciones y no satisface sus restricciones, 
          el agente de usuario debe disparar un evento simple llamado inválido que es cancelable (pero en este caso no tiene una acción predeterminada) 
          en el elemento y devuelve falso. De lo contrario, solo debe volver a verdadero sin hacer nada más.
          */
          
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
        /* se añade al boton limpiar una funcion que remueve la clase was-validated del form para que vuelva a su estilo inicial*/
        form.addEventListener('reset', function () {
          /*console.log('estoy funcionando') */
          form.classList.remove('was-validated')
        }, false)
      })
  })()
  