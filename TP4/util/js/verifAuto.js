
var data = document.getElementById('Patente')
data.addEventListener("keyup",function(){
    var a = data.value
    if(a.match(/[a-zA-Z]/)===null) {
        data.value = ""
    }
    if(a.length === 3){
        data.value = a.toUpperCase() + " "
    }
    if(a.length === 5){
        var b=a[4]
        if(b.match(/[0-9]/)===null) {
            data.value = ""
        }
    }
},false)

