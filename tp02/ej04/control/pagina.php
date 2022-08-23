<?php 

/* Ejercicio 4
Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.
Aplicar Bootstrap y validar los siguiente:
- El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo
aceptar números.
- El campo duración debe permitir un máximo de 3 números.
- Todos los datos son obligatorios
- Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
formulario.
- El botón “Borrar” debe limpiar el formulario.
El diseño del formulario completo es el siguiente: */

$titulo="";
$actores="";
$director="";
$guion="";
$produccion="";
$anio="";
$nacionalidad="";
$duracion="";
$restric="";
$sinopsis="";
$genero="";

if (isset($_POST)) {

    if (isset($_POST['titulo'])) {
        $titulo=$_POST['titulo']; }
    if (isset($_POST['actores'])) {
    $actores=$_POST['actores']; }
    if (isset($_POST['director'])) {
    $director=$_POST['director']; }
    if (isset($_POST['guion'])) {
    $guion=$_POST['guion']; }
    if (isset($_POST['produccion'])) {
    $produccion=$_POST['produccion']; }
    if (isset($_POST['anio'])) {
    $anio=$_POST['anio']; }
    if (isset($_POST['nacionalidad'])) {
    $nacionalidad=$_POST['nacionalidad']; }
    if (isset($_POST['duracion'])) {
    $duracion=$_POST['duracion']; }
    if (isset($_POST['restric'])) {
    $restric=$_POST['restric']; }
    if (isset($_POST['sinopsis'])) {
    $sinopsis=$_POST['sinopsis']; }
    if (isset($_POST['genero'])) {
    $genero=$_POST['genero']; }
} else {
        echo "sin datos";
    return; 
}

echo "<h3>La pelicula introducida es</h3>";
echo "<b>Titulo:</b>".$titulo."</br>";
echo "<b>Actores:</b>".$actores."</br>";
echo "<b>Director:</b>".$director."</br>";
echo "<b>Guión:</b>".$guion."</br>";
echo "<b>Produccion:</b>".$produccion."</br>";
echo "<b>Año:</b>".$anio."</br>";
echo "<b>Nacionalidad:</b>".$nacionalidad."</br>";
echo "<b>Duracion:</b>".$duracion."</br>";
echo "<b>Genero:</b>".$genero."</br>";
echo "<b>Restricciones:</b>".$restric."</br>";
echo "<b>Sinopsis:</b>".$sinopsis."</br>";

?>
