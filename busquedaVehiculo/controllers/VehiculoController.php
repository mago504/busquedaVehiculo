<?php 

class VehiculoController{

	public function getAllVehiculos(){
		$vehiculos = Vehiculo::getAll();
		return $vehiculos;
	}

	public function getOneVehiculo(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$vehiculo = Vehiculo::getEmploye($data);
			return $vehiculo;
		}
	}
	public function findVehiculos(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$vehiculos = Vehiculo::searchVehiculo($data);
		return $vehiculos;
	} 

	public function addVehiculo(){
		if(isset($_POST['submit'])){
			$data = array(
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'matricule' => $_POST['mat'],
				'depart' => $_POST['depart'],
				'poste' => $_POST['poste'],
				'date_emb' => $_POST['date_emb'],
				'statut' => $_POST['statut'],
			);
			$result = Vehiculo::add($data);
			if($result === 'ok'){
				Session::set('Exitosamente','Registro Agregado');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

	public function updateVehiculo(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'matricule' => $_POST['mat'],
				'depart' => $_POST['depart'],
				'poste' => $_POST['poste'],
				'date_emb' => $_POST['date_emb'],
				'statut' => $_POST['statut'],
			);
			$result = Vehiculo::update($data);
			if($result === 'ok'){
				Session::set('Exitosamente','Vehiculo Modificado');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}
	public function deleteVehiculo(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = Vehiculo::delete($data);
			if($result === 'ok'){
				Session::set('Exitosamente','Vehiculo Eliminado');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

}



?>