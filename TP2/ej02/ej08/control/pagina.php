<?php 
$edad=0;
$estudiante=" ";
if (isset($_GET)) {
    if (isset($_GET['edad'])) {
       $edad=$_GET['edad']; }
    if (isset($_GET['estudiante']))  {
       $estudiante=$_GET['estudiante']; }
} else {
    echo "sin datos";
    return; 
}

$valor=300;

if ($estudiante == "estudiante") {

   if ($edad >12) {
       $valor=180; }
     else { $valor=160; }
   }

echo "debe abonar ".$valor;

?>
