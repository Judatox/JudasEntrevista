<?php
	
	require 'conexion.php';

	$id = $_POST['id'];
	$FECHA = $_POST['FECHA'];
	$QUIEN_LO_REPORTA = $_POST['QUIEN_LO_REPORTA'];
	$DESCRIPCION_DEL_INCIDENTE = $_POST['DESCRIPCION_DEL_INCIDENTE'];
	$ACCIONES_TOMADAS = $_POST['ACCIONES_TOMADAS'];
	$ESTATUS = $_POST['ESTATUS'];
	$MOTIVO_CAMBIO_DE_ESTATUS = isset($_POST['MOTIVO_CAMBIO_DE_ESTATUS']) ? $_POST['MOTIVO_CAMBIO_DE_ESTATUS'] : null;
	

	
	$sql = "UPDATE incidentes SET FECHA='$FECHA', QUIEN LO REPORTA='$QUIEN_LO_REPORTA', DESCRIPCION DEL INCIDENTE='$DESCRIPCION_DEL_INCIDENTE', ACCIONES TOMADAS='$ACCIONES_TOMADAS', ESTATUS='$ESTATUS', MOTIVO CAMBIO DE ESTATUS='$MOTIVO_CAMBIO_DE_ESTATUS' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				
				<a href="index.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
