<body>
	<div class="container">
		<button type="button" class="btn btn-success" data-toggle='modal' data-target="#modalGuardar">Nuevo</button>
		<table class="table table-hover table-bordered table-striped table-sm">
			<thead class="thead-dark">
				<tr>
					<th>N°</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Sexo</th>
					<th>Curso</th>
					<th>Eliminar</th>
					<th>Actualizar</th>
				</tr>
			</thead>
			<tbody>
				<?php $n=1; foreach($alumno as $a){ ?>
					<tr>
						<td><?= $n; ?></td>
						<td><?= $a->nombres ?></td>
						<td><?= $a->apellidos ?></td>
						<td><?= $a->nombre_sexo ?></td>
						<td><?= $a->nombre_curso ?></td>
						<td><a href="<?= base_url('alumno_controller/eliminar/'.$a->id_alumno) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar el alumno?')">Eliminar</a></td>
						<td><a href="<?= base_url('alumno_controller/get_datos/'.$a->id_alumno) ?>" class="btn btn-info btn-sm">Actualizar</a></td>
					</tr>
					<?php $n++; } ?>
				</tbody>
			</table>
		</div>



		<div class="modal" tabindex="-1" role="dialog" id="modalGuardar">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Nuevo alumno</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url('alumno_controller/ingresar') ?>" method="POST" id="formAlumno" onsubmit="return validacion()">
							<div class="row">
								<div class="col">
									<label>Nombres:</label>
									<input type="text" name="nombres" id="nombres" class="form-control">
								</div>
								<div class="col">
									<label>Apellidos:</label>
									<input type="text" name="apellidos" id="apellidos" class="form-control">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col">
									<label>Sexo:</label>
									<select name="sexo" id="sexo" class="form-control">
										<option value="">--Seleccione sexo--</option>
										<?php foreach($sexo as $s){ ?>
											<option value="<?= $s->id_sexo ?>"><?= $s->nombre_sexo ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col">
									<label>Curso:</label>
									<select name="curso" id="curso" class="form-control">
										<option value="">--Seleccione curso--</option>
										<?php foreach($curso as $c){ ?>
											<option value="<?= $c->id_curso ?>"><?= $c->nombre_curso ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
						</div>

					</form>
				</div>
			</div>
		</div>