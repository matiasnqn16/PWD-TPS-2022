<?php

include_once "../Modelo/conector/BaseDatos.php";
include_once "../Modelo/Auto.php";
include_once "../Modelo/Persona.php";

$objPersona = new Auto();
$objUser = new Persona();
$colPersonas = $objPersona->listar();

foreach ($colPersonas as $persona){
    print_r($persona);
	$objUser->Buscar($persona->getOBJduenio());
    echo "<br>----------------<br>";
	echo $objUser;
	echo "<br>----------------<br>";
}

/* $objPersona->setear(24435345,"funes","chicharito","1943-04-12","299-435234","av siempreviva");
	$respuesta=$objPersona->insertar();
	// Inserto el OBj empresa en la base de datos
	if ($respuesta==true) {
			echo "\nOP INSERCION;  La empresa fue ingresada en la BD";
			$colempresas =$objPersona->listar("");
			foreach ($colempresas as $unaempresa){
		
				echo $unaempresa;
				echo "<br>---------------------------aaaaaaaaa----------------------------<br>";
			}
	}else 
		echo $objPersona->getmensajeoperacion(); */



?>