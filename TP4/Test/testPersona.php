<?php

include_once "../Modelo/conector/BaseDatos.php";
include_once "../Modelo/Persona.php";

$objPersona = new Persona();
$colPersonas = $objPersona->listar();

foreach ($colPersonas as $persona){
    echo $persona;
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