<?php 
	class MyModel{

		private $conn = null;

		public function get_connection(){
			if (!is_null($this->conn)) {
            	return $this->conn;
        	}
	        $this->conn = false;
	        try {
	            $this->conn = new PDO('mysql:host=localhost;dbname=demosiapraktikum', 'root', '');
	        } catch(PDOException $e) { 
	        	echo $e->getMessage();
	        }

	        return $this->conn;
		}

		public function getData(){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("SELECT * FROM detilkrp");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}

			return $hasil;

		}

		public function deleteData($idDetilKrp){
			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("DELETE FROM detilkrp WHERE idDetilKrp='$idDetilKrp'");
			$do_delete = $statement->execute();
			return $do_delete;

		}

		public function getById($idDetilKrp){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("SELECT * FROM detilkrp WHERE idDetilKrp='$idDetilKrp'");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}
			return $hasil;

		}
		public function insert_mhs($idKrp,$idMataPraktikum,$tugas,$uts,$uas){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("INSERT INTO detilkrp(idKrp,idMataPraktikum,tugas,uts,uas) VALUES(?,?,?,?,?)");
			return $statement->execute(array($idKrp,$idMataPraktikum,$tugas,$uts,$uas));

		}

		public function update_mhs($idDetilKrp,$idKrp,$idMataPraktikum,$tugas,$uts,$uas){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("UPDATE detilkrp 
				SET idKrp='$idKrp',idMataPraktikum='$idMataPraktikum', tugas='$tugas', uts='$uts',uas='$uas'  WHERE idDetilKrp='$idDetilKrp'");
			return $statement->execute();

		}

	}
 ?>