<?php
/* Ejercicio 3
a) Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
y la password para loguearse. Los datos del formulario son enviados a un script
verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
y en caso contrario un mensaje de error.

b) Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
usuario y la contraseña antes de ser enviados al servidor sino que también debe
realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
letras y números).
c) Aplicar Bootstrap de manera que la pantalla tenga un aspecto similar al siguiente:*/ 

$username="";
$password="";

if (isset($_POST["username"])) {
   $username=$_POST["username"]; }
if (isset($_POST["password"])) {
$password=$_POST["password"]; }

$userlist =[
  "juan" => "juanjuan1",
  "andres" => "andres1",
  "pedro" => "pedropedro1",
  "luis" => "luisluis1" ];

$usuarios=array_keys($userlist);

$existe = in_array($username, $usuarios);
//var_dump($existe);
//var_dump($username);
//var_dump($password);

if ($existe) {
   $clave=$userlist[$username];
//   var_dump($clave);
   if ($clave!=$password) {
       echo "clave incorrecta";
       return false;
   }
} else {
    echo "usuario inexistente"; 
    return false;
};

echo "<h1>welcome - küme akukonpaymi - bienvenido<h1>";
 


?>
