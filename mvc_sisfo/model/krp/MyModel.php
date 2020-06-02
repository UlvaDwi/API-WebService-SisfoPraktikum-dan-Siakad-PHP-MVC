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
			$statement = $koneksi->prepare("SELECT * FROM krp");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}

			return $hasil;

		}

		public function deleteData($idKrp){
			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("DELETE FROM krp WHERE idKrp='$idKrp'");
			$do_delete = $statement->execute();
			return $do_delete;

		}

		public function getById($idKrp){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("SELECT * FROM krp WHERE idKrp='$idKrp'");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}
			return $hasil;

		}
		public function insert_mhs($npm,$tahunAjaran,$tanggal){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("INSERT INTO krp(npm,tahunAjaran,tanggal) VALUES(?,?,?)");
			return $statement->execute(array($npm,$tahunAjaran,$tanggal));

		}

		public function update_mhs($idKrp,$npm,$tahunAjaran,$tanggal){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("UPDATE krp 
				SET npm='$npm',tahunAjaran='$tahunAjaran', tanggal='$tanggal' WHERE idKrp='$idKrp'");
			return $statement->execute();

		}

	}
 ?>