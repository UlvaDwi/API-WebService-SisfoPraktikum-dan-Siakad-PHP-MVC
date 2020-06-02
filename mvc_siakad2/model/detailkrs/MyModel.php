<?php 
class MyModel{

	private $conn = null;

	public function __construct(){
		$this->DataNilai();
	}

	public function DataNilai(){
		$url = "http://localhost/pemrograman_web2/uas/mvc_sisfo/API/api.php";
		$json = file_get_contents($url);
		$krs = json_decode($json, true);
		foreach ($krs['kirim'] as $data) {
			$this->updateDataNilai($data['npm'], $data['nilai']);
		}
	}

	public function updateDataNilai($npm, $nilai){

		$koneksi = $this->get_connection();
		$statement = $koneksi->prepare("UPDATE dataNilai SET praktikum = '$nilai' WHERE and npm = '$npm'");
		return $statement->execute();

	}

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
		$statement = $koneksi->prepare("SELECT * FROM detilkrs");
		$statement->execute();
		while ($row = $statement->fetch()) {
			$hasil[] = $row;
		}

		return $hasil;

	}

	public function deleteData($idDetilKrs){
		$koneksi = $this->get_connection();
		$statement = $koneksi->prepare("DELETE FROM detilkrs WHERE idDetilKrs='$idDetilKrs'");
		$do_delete = $statement->execute();
		return $do_delete;

	}

	public function getById($idDetilKrs){

		$koneksi = $this->get_connection();
		$statement = $koneksi->prepare("SELECT * FROM detilkrs WHERE idDetilKrs='$idDetilKrs'");
		$statement->execute();
		while ($row = $statement->fetch()) {
			$hasil[] = $row;
		}
		return $hasil;
	}
	public function insert_mhs($idKrs,$idMk,$uts, $uas, $tugas){

		$koneksi = $this->get_connection();
		$statement = $koneksi->prepare("INSERT INTO detilkrs(idKrs, idMk, uts, uas, tugas) VALUES(?,?,?,?,?)");
		return $statement->execute(array($idKrs,$idMk,$uts, $uas,$tugas));

	}

	public function update_mhs($idDetilKrs,$idKrs,$idMk,$uts, $uas, $praktikum,$tugas){

		$koneksi = $this->get_connection();
		$statement = $koneksi->prepare("UPDATE detilkrs 
			SET idKrs='$idKrs',idMk='$idMk', uts='$uts',uas='$uas',praktikum='$praktikum',tugas='$tugas' WHERE idDetilKrs='$idDetilKrs'");
		return $statement->execute();

	}

}
?>