// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')
  var data = document.forms['getuser'].getElementsByTagName('input')
  
  var a = ""
  var b = ""
  
  data.username.addEventListener("keyup",function(){
    a=data.username.value
  },false)
  
  data.password.addEventListener("keyup",function(){
    b=data.password.value
    if( a === b){
      data.password.classList.add("is-invalid")
      document.getElementById('soyElSubmit').classList.add("disabled")
      
    }else{
      document.getElementById('soyElSubmit').classList.remove("disabled")
      form.classList.remove('was-validated')
      if(data.password.classList.contains('is-invalid')){
        data.password.classList.remove('is-invalid')
      }
    }
  },false)


  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {

        /* Tomando valores para cumplir con algunas validaciones del lado del cliente */
        var user = data.username.value
        var pass = data.password.value

        if (!form.checkValidity() || (user === pass)) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)

    })
})()
