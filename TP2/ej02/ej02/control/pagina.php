<?php 

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
