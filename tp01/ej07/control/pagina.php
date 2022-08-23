<?php 
/* Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. */

$op1=0;
$op2=0;
$operacion="suma"; // establece un comportamiento por defecto, no esta especificado en la consigna.

if (isset($_GET)) {
    if (isset($_GET['op1'])) {
    $op1=$_GET['op1']; }

    if (isset($_GET['op2'])) {
        $op2=$_GET['op2']; }

    if (isset($_GET['operacon'])) {    
        $operacion=$_GET['operacion']; }
} else {
    echo "sin datos";
    return; 
}

if ($operacion == "suma") {
    $result=(int)$op1 + (int)$op2;
    echo "suma de ".$op1." mas ".$op2.", resultado:".$result;
}

if ($operacion == "resta") {
    $result=(int)$op1 - (int)$op2;
    echo "resta de ".$op1." menos ".$op2.", resultado:".$result;
}

if ($operacion == "multiplicacion") {
    $result=(int)$op1 * (int)$op2;
    echo "multiplicacion de ".$op1." por ".$op2.", resultado:".$result;
}

?>
