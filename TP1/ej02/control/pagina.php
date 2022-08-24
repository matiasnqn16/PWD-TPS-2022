<?php 

/* Ejercicio 2
Crear una página php que contenga un formulario HTML que permita ingresar las horas
de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
Enviar los datos del formulario por el método Get a otra página php que los reciba y
complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
se cursan por semana. */

$dia=[];

if (isset($_GET)) {
    if (isset($_GET['dia1'])) {
        $dia[0]=$_GET['dia1']; }

    if (isset($_GET['dia2'])) {
        $dia[1]=$_GET['dia2']; }

    if (isset($_GET['dia3'])) {
        $dia[2]=$_GET['dia3']; }

    if (isset($_GET['dia4'])) {
        $dia[3]=$_GET['dia4']; }

    if (isset($_GET['dia5'])) {
        $dia[4]=$_GET['dia5']; }
} else {
    echo "sin datos";
    return; 
}

$suma=0;
for ($i=0; $i<5; $i++) {
   $suma+=$dia[$i];
}

echo "La cantidad total de horas es:".$suma;

?>
