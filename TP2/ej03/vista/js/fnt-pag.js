// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')
/*    */

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

          /* Tomando valores para cumplir con algunas validaciones del lado del cliente */
          var data = document.forms['getuser'].getElementsByTagName('input')
          console.log(data.username.value)
          console.log(data.password.value)
          
        }if (data.username.value.localeCompare(data.username.value)){
          alert ("la pass y el user son iguales")
        }if (cumpleReq(data.password.value)){
          alert ("listo :)")
        }

        form.classList.add('was-validated')
      }, false)
      
    })
})()

function cumpleReq($esto){
  var cumple = false
  if(/[a-z]/.test($esto)){
    alert("contiene minuscula")
    if(/[A-Z]/.test($esto)){
      alert("contiene mayuscula")
      if(/[0-9]/.test($esto)){
        alert("contiene numeros")
        cumple = true
      }
    }
  }else{
    alert("esta Vacio")
  }
return cumple
}