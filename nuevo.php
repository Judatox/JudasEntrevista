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
				<h3 style="text-align:center">INCIDENTES</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="FECHA" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
					 <input class="form-control" type="date" id="FECHA" name="FECHA">
					</div>
				</div>
				
				<div class="form-group">
					<label for="QUIEN LO REPORTA" class="col-sm-2 control-label">Quien lo reporta?</label>
					<div class="col-sm-10">
						<input type="QUIEN LO REPORTA" class="form-control" id="QUIEN LO REPORTA" name="QUIEN LO REPORTA" placeholder="QUIEN LO REPORTA" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="DESCRIPCION DEL INCIDENTE" class="col-sm-2 control-label">DESCRIPCION DEL INCIDENTE</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="DESCRIPCION DEL INCIDENTE" name="DESCRIPCION DEL INCIDENTE" placeholder="DESCRIPCION DEL INCIDENTE">
					</div>
				</div>
				
							<div class="form-group">
					<label for="ACCIONES TOMADAS" class="col-sm-2 control-label">ACCIONES TOMADAS</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="ACCIONES TOMADAS" name="DESCRIPCION DEL INCIDENTE" placeholder="ACCIONES TOMADAS">
					</div>
				</div>
				
				<div class="form-group">
					<label for="ESTATUS" class="col-sm-2 control-label">ESTATUS</label>
					<div class="col-sm-10">
						<select class="form-control" id="ESTATUS" name="ESTATUS">
							<option value="ABIERTO">ABIERTO</option>
							<option value="CERRADO">CERRADO</option>
						
						</select>
					</div>
				</div>
				

				<div class="form-group">
					<label for="MOTIVO DEL ESTATUS" class="col-sm-2 control-label">MOTIVO CAMBIO DE ESTATUS</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="MOTIVO DEL ESTATUS" name="MOTIVO DEL ESTATUS" placeholder="MOTIVO DEL ESTATUS">
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>