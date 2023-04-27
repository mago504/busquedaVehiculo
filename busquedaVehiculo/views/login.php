<?php 
	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->auth();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-6 mx-auto bg-dark.bg-gradient">
			<?php include('./views/includes/alerts.php');?>
			<div class="card">
				<div class="card-header">
					<h3 class="text-center">Inicia Sesión</h3>
				</div>
				<div class="card-body bg-light">
			      	<form method="post" class="mr-1">
			      		<div class="form-group">
				      		<input type="text" name="username" placeholder="Introduce tu Usuario" class="form-control">
				      	</div>
						<br>
				      	<div class="form-group">
				      		<input type="password" name="password" placeholder="Introduce tu contrasena" class="form-control">
				      	</div>
						<br>
			      		<button name="submit" class="btn btn-sm btn-primary">Siguiente</button>
			      	</form>
				</div>
				<div class="card-footer">
					<a href="<?php echo BASE_URL;?>register" class="btn btn-link">Crear Usuario</a>
				</div>
			</div>
		</div>
	</div>
</div>