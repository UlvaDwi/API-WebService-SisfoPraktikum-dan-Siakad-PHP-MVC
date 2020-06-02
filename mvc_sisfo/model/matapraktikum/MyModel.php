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
			$statement = $koneksi->prepare("SELECT * FROM matapraktikum");
			$statement->execute();

			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}

			return $hasil;


		}

		public function deleteData($idMataPraktikum){
			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("DELETE FROM matapraktikum WHERE idMataPraktikum='$idMataPraktikum'");
			$do_delete = $statement->execute();
			return $do_delete;

		}

		public function getById($idMataPraktikum){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("SELECT * FROM matapraktikum WHERE idMataPraktikum='$idMataPraktikum'");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}
			return $hasil;

		}
		public function insert_mhs($namaMataPraktikum,$tahunAjaran){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("INSERT INTO matapraktikum(namaMataPraktikum,tahunAjaran) VALUES(?,?)");
			return $statement->execute(array($namaMataPraktikum,$tahunAjaran));

		}

		public function update_mhs($idMataPraktikum,$namaMataPraktikum,$tahunAjaran){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("UPDATE matapraktikum
				SET namaMataPraktikum='$namaMataPraktikum',tahunAjaran='$tahunAjaran' WHERE idMataPraktikum='$idMataPraktikum'");
			return $statement->execute();

		}

	}
 ?>