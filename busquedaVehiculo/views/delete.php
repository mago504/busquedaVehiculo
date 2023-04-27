<?php 
	if(isset($_POST['id'])){
		$exitEmploye = new VehiculoController();
		$exitEmploye->deleteVehiculo();
	}
?>