<?php

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
