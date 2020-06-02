<?php 
	class MyModel{

		private $conn = null;

		public function get_connection(){
			if (!is_null($this->conn)) {
            	return $this->conn;
        	}
	        $this->conn = false;
	        try {
	            $this->conn = new PDO('mysql:host=localhost;dbname=demosiakad', 'root', '');
	        } catch(PDOException $e) { 
	        	echo $e->getMessage();
	        }

	        return $this->conn;
		}

		public function getData(){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("SELECT * FROM krs");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}

			return $hasil;

		}

		public function deleteData($idKrs){
			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("DELETE FROM krs WHERE idKrs='$idKrs'");
			$do_delete = $statement->execute();
			return $do_delete;
		}

		public function getById($idKrs){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("SELECT * FROM krs WHERE idKrs='$idKrs'");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}
			return $hasil;

		}
		public function insert_mhs($npm,$tahunAjaran){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("INSERT INTO krs(npm,tahunAjaran) VALUES(?,?)");
			return $statement->execute(array($npm,$tahunAjaran));

		}

		public function update_mhs($idKrs,$npm,$tahunAjaran){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("UPDATE krs 
				SET npm='$npm',tahunAjaran='$tahunAjaran' WHERE idKrs='$idKrs'");
			return $statement->execute();

		}

	}
 ?>