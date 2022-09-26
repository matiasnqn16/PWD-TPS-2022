<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once "../util/Estructura/header.php"; ?>
<div >

<div class="card mb-3 container align-items-center">
  <img src="../util/img/Cronos5-850x555.jpg" class="card-img-top rounded" style="width: 900px;">
  <div class="card-body">
    <h5 class="card-title">Autos</h5>



    <div class="accordion  " id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed bg-dark text-bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Ejercicio 1 
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body text-bg-secondary">
      – Crear una pagina php <a class="link-dark" href="VerAutos.php">“VerAutos.php”</a> , en ella usando la capa de control correspondiente mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido. En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay autos cargados.
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed bg-dark text-bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      Ejercicio 2 
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body text-bg-secondary">
      – Crear una pagina <a href="buscarAuto.php" class="link-dark">"buscarAuto.php"</a> que contenga un formulario en donde se solicite el numero de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean convenientes en caso de que no se encuentre ningún auto con la patente ingresada. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM. 
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed bg-dark text-bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      Ejercicio 3 
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body text-bg-secondary">
      – Crear una página <a href="listaPersonas.php" class="link-dark">"listaPersonas.php"</a> que muestre un listado con las personas que se encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM. 
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed bg-dark text-bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      Ejercicio 4 
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body text-bg-secondary">
      – Crear una página <a href="NuevaPersona.php" class="link-dark">“NuevaPersona.php”</a> que contenga un formulario que permita solicitar todos los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM. 
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed bg-dark text-bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      Ejercicio 5 
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body text-bg-secondary">
      – Crear una página <a href="NuevoAuto.php" class="link-dark">“NuevoAuto.php”</a> que contenga un formulario en el que se permita cargar todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM. 
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button class="accordion-button collapsed bg-dark text-bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
      Ejercicio 6 
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
      <div class="accordion-body text-bg-secondary">
      – Crear una página <a href="CambioDuenio.php" class="link-dark">“CambioDuenio.php”</a> que contenga un formulario en donde se solicite el numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM. 
      </div>
    </div>
  </div>


<div class="accordion-item">
    <h2 class="accordion-header" id="headingNine">
      <button class="accordion-button collapsed bg-dark text-bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
      Ejercicio 7 
      </button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
      <div class="accordion-body text-bg-secondary">
      – Crear una página <a href="buscarPersona.php" class="link-dark">“BuscarPersona.php”</a> que contenga un formulario que permita cargar un numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php” busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
      </div>
    </div>
  </div>
</div>



    <p class="card-text"><small class="text-muted">TPN-4</small></p>

    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <h3 class="text-muted">Grupo 4</h3>
               
            </div>
            <div class="col-md-4 footer-col">
                <h3 class="text-muted">Integrantes: </h3>
                <ul class="list-inline">
                    <li class="text-muted">
                        Farfan Matias 
                        
                    </li>
                    <li class="text-muted">
                        Gaspart Sabrina
                        
                    </li>
                    <li class="text-muted">
                        Gualda Daniel
                        
                    </li>
                    <li class="text-muted">
                        Ramirez Franco
                    </li>
                    
                </ul>
            </div>
            <div class="col-md-4 footer-col">
                <h3 class="text-muted">TP 4</h3>
                phpMysql 
            </div>
        </div>
    </div>



  </div>
</div>
    
</div>









</div>

</body>
</html>