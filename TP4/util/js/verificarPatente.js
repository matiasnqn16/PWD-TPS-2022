(function () {
    'use strict'

    var data = document.forms['Patente'].getElementByTagName('input')
    

    var a = ""
    var b = ""
    data.Patente.addEventListener("keyup", function(){
        a=data.Patente.value
        if(a.length === 3){
            console.log("llega a 3")
            data.Patente.innerHTML = "hola"
        }

    },false)



}


)