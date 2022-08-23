<?php 

/*Ejercicio 5
Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
“radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
un mensaje que indique el tipo de estudios que posee y su sexo. */

$nombre="";
$apellido="";
$edad=0;
$direccion="";
$genero="";
$nivelest="";
if (isset($_GET)) {

    if (isset($_GET['nombre'])) {
    $nombre=$_GET['nombre']; }

    if (isset($_GET['apellido'])) {
        $apellido=$_GET['apellido']; }

    if (isset($_GET['edad'])) {
       $edad=$_GET['edad']; }

    if (isset($_GET['direccion'])) {
       $direccion=$_GET['direccion']; }

    if (isset($_GET['nivelest'])) {
        $nivelest=$_GET['nivelest']; }
 
    if (isset($_GET['genero'])) {
        $genero=$_GET['genero']; }
 
} else {
    echo "sin datos";
    return; 
}

echo "Hola, yo soy ".$nombre.",".$apellido." tengo ".$edad." de edad y vivo ".$direccion;
echo "<br>";
if ($edad>=18) {
    echo "soy mayor de edad"; }
else {
    echo "no soy mayor edad";
}
echo "<br>";
echo "soy de genero ".$genero." y mi nivel de estudios es ".$nivelest;
echo "<br>";

?>



