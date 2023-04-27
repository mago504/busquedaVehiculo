<?php 
	if(isset($_POST['id'])){
		$exitVehiculo = new VehiculoController();
		$vehiculo = $exitVehiculo->getOneVehiculo();
	}else{
		Redirect::to('home');
	}
	if(isset($_POST['submit'])){
		$exitVehiculo = new VehiculoController();
		$exitVehiculo->updateVehiculo();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Modificar datos Vehiculo</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="nom">Nombre Propietario</label>
							<input type="text" name="nom" class="form-control" placeholder="Ingrese Nombre..."
							value="<?php echo $vehiculo->nom; ?>"
							>
						</div>
						<br>
						<div class="form-group">
							<label for="prenom">Apellido Propietario</label>
							<input type="text" name="prenom" class="form-control" placeholder="Ingrese Apellido..."
							value="<?php echo $vehiculo->prenom; ?>"
							>
						</div>
						<br>
						<div class="form-group">
							<label for="mat">Matricula del Vehiculo</label>
							<input type="text" name="mat" class="form-control" placeholder="Ingrese Matricula..."
								value="<?php echo $vehiculo->matricule; ?>">
						</div>
						<br>
						<div class="form-group">
							<label for="depart">Marca del Vehiculo</label>
							<input type="text" name="depart" class="form-control" placeholder="Ingrese Marca..."
							value="<?php echo $vehiculo->depart; ?>">
							<input type="hidden" name="id" value="<?php echo $vehiculo->id;?>">
						</div>
						<br>
						<div class="form-group">
							<label for="poste">Modelo del Vehiculo</label>
							<input type="text" name="poste" class="form-control" placeholder="Ingrese Modelo..."
							value="<?php echo $vehiculo->poste; ?>">
						</div>
						<br>
						<div class="form-group">
							<label for="date_emb">Fecha de Ingreso del Vehiculo</label>
							<input type="date" name="date_emb" class="form-control">
						</div>
						<br>
						<div class="form-group">
							<select class="form-control" name="statut">
								<option value="1" <?php echo $vehiculo->statut ? 'selected' : ''; ?>>Activo</option>
								<option value="0"
								<?php echo !$vehiculo->statut ? 'selected' : ''; ?>
								>Inactivo</option>
							</select>
						</div>
						<br>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Validar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>