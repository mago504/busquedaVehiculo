<?php 
	if(isset($_POST['submit'])){
		$createUser = new UsersController();
		$createUser->register();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-6 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card">
				<div class="card-header">
					<h3 class="text-center">Registro</h3>
				</div>
				<div class="card-body bg-light">
			      	<form method="post" class="mr-1">
			      		<div class="form-group">
				      		<input type="text" name="fullname" placeholder="Nombre y Apellido" class="form-control">
				      	</div>
						<br>
			      		<div class="form-group">
				      		<input type="text" name="username" placeholder="Alias" class="form-control">
				      	</div>
						<br>
				      	<div class="form-group">
				      		<input type="password" name="password" placeholder="Contrasena" class="form-control">
				      	</div>
						<br>
			      		<button name="submit" class="btn btn-sm btn-primary">Registrate</button>
			      	</form>
				</div>
				<div class="card-footer">
					<a href="<?php echo BASE_URL;?>login" class="btn btn-link">Inicia Sesion</a>
				</div>
			</div>
		</div>
	</div>
</div>