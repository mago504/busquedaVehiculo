<?php 
	if(isset($_POST['find'])){
		$data = new VehiculoController();
		$vehiculos = $data->findVehiculos();
	}else{
		$data = new VehiculoController();
		$vehiculos = $data->getAllVehiculos();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-10 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card">
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-primary mr-2 mb-2">
						<i class="fas fa-plus"></i>
					</a>
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<a href="<?php echo BASE_URL;?>logout" title="Desconectado" class="btn btn-link mr-2 mb-2">
						<i class="fas fa-user mr-2"> <?php echo $_SESSION['username'];?></i>
					</a>
					<h1 style="text-align:center"><strong>BUSQUEDA DE VEHICULO</strong></h1>
					<form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" class="form-control" name="search" placeholder="Buscar...">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
					</form>
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">Nombre y Apellido</th>
					      <th scope="col">Placa Vehiculo</th>
					      <th scope="col">Marca</th>
					      <th scope="col">Modelo</th>
					      <th scope="col">Fecha de Registro</th>
					      <th scope="col">Estado</th>
					      <th scope="col">Acciones</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($vehiculos as $vehiculo):?>
					    	<tr>
						      <th scope="row"><?php echo $vehiculo['nom'].' '.$vehiculo['prenom']; ?></th>
						      <td><?php echo $vehiculo['matricule'];?></td>
						      <td><?php echo $vehiculo['depart'];?></td>
						      <td><?php echo $vehiculo['poste'];?></td>
						      <td><?php echo $vehiculo['date_emb'];?></td>
						      <td>
						      	<?php echo $vehiculo['statut']
						      			?
						      			'<span class="badge bg-primary">Activo</span>'
						      			:
						      			'<span class="badge bg-warning text-dark">Inactivo</span>';
						      ;?></td>
						      <td class="d-flex flex-row">
						      	<form method="post" class="mr-1" action="update">
						      		<input type="hidden" name="id" value="<?php echo $vehiculo['id'];?>">
						      		<button class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i></button>
						      	</form>
								<div><p>&nbsp;</p></div>
						      	<form method="post" class="mr-1" action="delete">
						      		<input type="hidden" name="id" value="<?php echo $vehiculo['id'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>