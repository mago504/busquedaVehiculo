<?php 
	if(isset($_POST['submit'])){
		$newVehiculo = new VehiculoController();
		$newVehiculo->addEmploye();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Agregar Registro</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="nom">Nombre Propietario...</label>
							<input type="text" name="nom" class="form-control" placeholder="Ingrese Nombre...">
						</div>
						<br>
						<div class="form-group">
							<label for="prenom">Apellido Propietario...</label>
							<input type="text" name="prenom" class="form-control" placeholder="Ingrese Apellido...">
						</div>
						<br>
						<div class="form-group">
							<label for="mat">Placa del Vehiculo...</label>
							<input type="text" name="mat" class="form-control" placeholder="Ingrese Placa...">
						</div>
						<br>
						<div class="form-group">
							<label for="depart">Marca del Vehiculo</label>
							<input type="text" name="depart" class="form-control" placeholder="Ingrese Marca...">
						</div>
						<br>
						<div class="form-group">
							<label for="poste">Modelo del Vehiculo...</label>
							<input type="text" name="poste" class="form-control" placeholder="Ingrese Modelo...">
						</div>
						<br>
						<div class="form-group">
							<label for="date_emb">Fecha de ingreso...</label>
							<input type="date" name="date_emb" class="form-control">
						</div>
						<br>
						<div class="form-group">
							<select class="form-control" name="statut">
								<option value="1">Activo</option>
								<option value="0">Inactivo</option>
							</select>
						</div>
						<br>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Agregar Registro</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>