<div class="box-principal">
<h3 class="titulo">Estudiante <?php echo $datos['nombre']; ?><br></h3>
	<div class="panel panel-active">
		<div class="panel-heading">
			<h3 class="panel-title">Perfil del estudiante: <b> <?php echo $datos['nombre']; ?></b></h3>
		</div>
		<div>
			<div class="row">
				<div class="col-md-3">
					<img class="img-responsive" src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $datos['imagen']; ?>">
				</div>
				<div class="col-md-9">
					<ul class="list-group">
						<li class="list-group-item">
							<b>Nombre: </b><?php echo $datos['nombre']; ?>
						</li>
						<li class="list-group-item">
							<b>Edad: </b><?php echo $datos['edad']; ?>
						</li>
						<li class="list-group-item">
							<b>Promedio: </b><?php echo $datos['promedio']; ?>
						</li>
						<li class="list-group-item">
							<b>Seccion: </b><?php echo $datos['nombre_seccion']; ?>
						</li>
						<li class="list-group-item">
							<b>Fecha de registro: </b><?php echo $datos['fecha']; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
</div>