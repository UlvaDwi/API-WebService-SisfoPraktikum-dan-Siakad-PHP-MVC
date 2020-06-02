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
			$statement = $koneksi->prepare("SELECT * FROM mk");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}

			return $hasil;

		}

		public function deleteData($idMk){
			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("DELETE FROM mk WHERE idMk='$idMk'");
			$do_delete = $statement->execute();
			return $do_delete;

		}

		public function getById($idMk){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("SELECT * FROM mk WHERE idMk='$idMk'");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}
			return $hasil;

		}
		public function insert_mhs($namaMk,$tahunAjaran){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("INSERT INTO mk(namaMk,tahunAjaran) VALUES(?,?)");
			return $statement->execute(array($namaMk,$tahunAjaran));

		}

		public function update_mhs($idMk,$namaMk,$tahunAjaran){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("UPDATE mk 
				SET namaMk='$namaMk',tahunAjaran='$tahunAjaran' WHERE idMk='$idMk'");
			return $statement->execute();

		}

	}
 ?>