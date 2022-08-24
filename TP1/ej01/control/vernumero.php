<?php
/*Ejercicio 1
Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
respuesta, que permita volver a la página anterior. */

    $numero=0;
    if (isset($_POST)) {
        if (isset($_POST['nro1'])) {
        $numero=$_POST['nro1'];}
    } else {
        echo "sin datos";
        return ;
    }
    if ($numero<0)  { 
        echo "el numero es negativo"; }
     elseif ($numero>0) {
        echo "el numero es positivo"; }
     elseif ($numero==0) { 
        echo "es cero";
    }

    echo '<br>';
    echo '<a href="javascript: history.go(-1)">Volver</a>';
?>

