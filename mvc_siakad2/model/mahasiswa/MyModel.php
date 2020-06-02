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
			$statement = $koneksi->prepare("SELECT * FROM mahasiswa");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}

			return $hasil;

		}

		public function deleteData($npm){
			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("DELETE FROM mahasiswa WHERE npm='$npm'");
			$do_delete = $statement->execute();
			return $do_delete;

		}

		public function getById($npm){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("SELECT * FROM mahasiswa WHERE npm='$npm'");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}
			return $hasil;

		}
		public function insert_mhs($npm,$nama,$alamat,$password,$status){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("INSERT INTO mahasiswa(npm,nama,alamat,password,status) VALUES(?,?,?,?,?)");
			return $statement->execute(array($npm,$nama,$alamat,$password,$status));

		}

		public function update_mhs($npm,$nama,$alamat,$password,$status){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("UPDATE mahasiswa 
				SET nama='$nama',alamat='$alamat',password='$password', status='$status' WHERE npm='$npm'");
			return $statement->execute();

		}

	}
 ?>