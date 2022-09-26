<?php
include_once '../configuracion.php';
$objAbmPersona = new CtrlPersona();
$datos = data_submitted();
$obj = NULL;
if (isset($datos['NroDni'])) {
	$listaPersona = $objAbmPersona->buscar($datos);
	if (count($listaPersona) == 1) {
		$obj = $listaPersona[0];
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../vista/bootstrap-5.2.0-dist/css/bootstrap.min.css">

	<title>Editar persona</title>
</head>

<body>
	<?php include_once "../util/Estructura/header.php"; ?>
	<div class="container">
		<div class="row">
			<div class="mx-auto mt-3">

				<h3>Editando Persona</h3>
				<?php if ($obj != null) { ?>
					<form class="row gx-3 align-items-center needs-validation" method="post" action="accion/accionEditarPersona.php" novalidate>
						<div class="col-12 mb-3">
							<div class="col-3">
								<label for="NrpDni" class="form-label" >Nro Dni</label>
								<input class="form-control bg-primary" id="NroDni" readonly name="NroDni" type="text" value="<?php echo $obj->getnrodni() ?>" >
								
							</div>

							<div class="col-4 mb-3">
								<label for="Apellido" class="form-label">Apellido</label>
								<input class="form-control" type="text" name="Apellido" id="Apellido" maxlength="20" value="<?php echo $obj->getap() ?>" required>
								<div class="valid-feedback">Check!</div>
                    			<div class="invalid-feedback">Campo necesario</div>

							</div>
							<div class="col-4 mb-3">
								<label for="Nombre" class="form-label">Nombre</label>
								<input class="form-control" type="text" name="Nombre" id="Nombre" maxlength="20" value="<?php echo $obj->getnom() ?>" required>
								<div class="valid-feedback">Check!</div>
                    			<div class="invalid-feedback">Campo necesario</div>

							</div>
							<div class="col-4 mb-3">
								<label for="fechaNac" class="form-label">Fecha Nacimiento</label>
								<input class="form-control" type="date" name="fechaNac" id="fechaNac" min="1900-01-01" max="<?php echo $date ?>" value="<?php echo $obj->getfnac() ?>" required>
								<div class="valid-feedback">Check!</div>
                    			<div class="invalid-feedback">Campo necesario</div>

							</div>
							<div class="col-4 mb-3">
								<label for="Telefono" class="form-label">Telefono</label>
								<input class="form-control" type="text" name="Telefono" id="Telefono" maxlength="10" value="<?php echo $obj->gettel() ?>" required>
								<div class="valid-feedback">Check!</div>
                    			<div class="invalid-feedback">Campo necesario</div>

							</div>
							<div class="col-4 mb-3">
								<label for="Domicilio" class="form-label">Domicilio</label>
								<input class="form-control" type="text" name="Domicilio" id="Domicilio" maxlength="20" value="<?php echo $obj->getdomi() ?>" required>
								<div class="valid-feedback">Check!</div>
                    			<div class="invalid-feedback">Campo necesario</div>

							</div>
							<div class="mb-3">
								<button class="btn btn-secondary" type="reset">Limpiar</button>

								<button class="btn btn-primary" type="submit">Enviar Datos</button>

							</div>

					</form>
				<?php } else {

					echo "<p>No se encontro la clave que desea modificar";
				} ?>

				<?php include_once "../util/Estructura/footer.php"; ?>
			</div>
		</div>
	</div>
</body>
<script src="../util/js/verifPersona.js"></script>

</html>