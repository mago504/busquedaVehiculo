<?php 

class Vehiculo {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM base');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	static public function getVehiculo($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM base WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$vehiculo = $stmt->fetch(PDO::FETCH_OBJ);
			return $vehiculo;
		}catch(PDOException $ex){
			echo 'error' . $ex->getMessage();
		}
	}

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO base (nom,prenom,matricule,depart,poste,date_emb,statut)
			VALUES (:nom,:prenom,:matricule,:depart,:poste,:date_emb,:statut)');
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':prenom',$data['prenom']);
		$stmt->bindParam(':matricule',$data['matricule']);
		$stmt->bindParam(':depart',$data['depart']);
		$stmt->bindParam(':poste',$data['poste']);
		$stmt->bindParam(':date_emb',$data['date_emb']);
		$stmt->bindParam(':statut',$data['statut']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE base SET nom= :nom,prenom=:prenom,matricule=:matricule,depart=:depart,poste=:poste,date_emb=:date_emb,statut=:statut WHERE id=:id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':prenom',$data['prenom']);
		$stmt->bindParam(':matricule',$data['matricule']);
		$stmt->bindParam(':depart',$data['depart']);
		$stmt->bindParam(':poste',$data['poste']);
		$stmt->bindParam(':date_emb',$data['date_emb']);
		$stmt->bindParam(':statut',$data['statut']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

	static public function delete($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM base WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'error' . $ex->getMessage();
		}
	}

	static public function searchVehiculo($data){
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM base WHERE nom LIKE ? OR matricule LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$vehiculos = $stmt->fetchAll();
			return $vehiculos;
		}catch(PDOException $ex){
			echo 'error' . $ex->getMessage();
		}
	}
}
