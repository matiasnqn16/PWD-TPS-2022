<?php
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

