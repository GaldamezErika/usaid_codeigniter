<body>
	<div class="container">
		<div class="modal-header">
			<h5 class="modal-title">Actualizar alumno</h5>
		</div>
		<div class="modal-body">
			<?php foreach($alumno as $al){ ?>
				<form action="<?= base_url('alumno_controller/actualizar') ?>" method="POST" id="formAlumno" onsubmit="return validacion()">
					<input type="hidden" name="id" id="id" value="<?= $al->id_alumno ?>">
					<div class="row">
						<div class="col">
							<label>Nombres:</label>
							<input type="text" name="nombres" id="nombres" value="<?= $al->nombres ?>" class="form-control">
						</div>
						<div class="col">
							<label>Apellidos:</label>
							<input type="text" name="apellidos" id="apellidos" value="<?= $al->apellidos ?>" class="form-control">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<label>Sexo:</label>
							<select name="sexo" id="sexo" class="form-control">
								<option value="">--Seleccione sexo--</option>
								<?php foreach($sexo as $s){ ?>
									<option value="<?= $s->id_sexo ?>" <?php if($s->id_sexo == $al->id_sexo){ echo "selected"; } ?>><?= $s->nombre_sexo ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col">
							<label>Curso:</label>
							<select name="curso" id="curso" class="form-control">
								<option value="">--Seleccione curso--</option>
								<?php foreach($curso as $c){ ?>
									<option value="<?= $c->id_curso ?>" <?php if($c->id_curso == $al->id_curso){ echo "selected"; } ?>><?= $c->nombre_curso ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="btnGuardar">Actualizar</button>
				</div>

			</form>
		<?php } ?>
	</div>