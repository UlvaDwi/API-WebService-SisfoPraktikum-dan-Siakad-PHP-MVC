<?php
	require_once 'model/detailkrs/MyModel.php';
	class Mahasiswa{

		public $model;

		function __construct(){
			$this->model = new MyModel();
		}

		public function redirect($location){
			header('location:'.$location);
		}

		public function display_data(){

			$data = $this->model->getData();
			include 'view/detailkrs/view_data.php';

		}

		public function insert_data(){
			include 'view/detailkrs/form_insert.php';
		}

		public function do_insert(){

			if (isset($_POST['simpan'])) {
				// $idDetilKrs	= $_POST['idDetilKrs'];
				$idKrs	= $_POST['idKrs'];
				$idMk	= $_POST['idMk'];
				$uts	= $_POST['uts'];
				$uas	= $_POST['uas'];
				// $praktikum	= $_POST['praktikum'];
				$tugas	= $_POST['tugas'];
				$save = $this->model->insert_mhs($idKrs,$idMk,$uts, $uas, $praktikum,$tugas);
				if ($save == true) {
					echo "<script>alert('Data berhasil ditambahkan');location='index.php?lihat=utama/index_detailkrs'</script>";
				}else{
					echo "<script>alert('Data gagal ditambah');location='index.php?lihat=utama/index_detailkrs'</script>";
				}
			}
		}

		public function delete_data(){

			$idDetilKrs = $_GET['idDetilKrs'];
			$this->model->deleteData($idDetilKrs);
			$this->redirect('index.php?lihat=utama/index_detailkrs');

		}

		public function get_update_data(){
			$idDetilKrs = $_GET['idDetilKrs'];
			$data = $this->model->getById($idDetilKrs);
			include 'view/detailkrs/form_update.php';
		}

		public function do_update(){
			if (isset($_POST['submit'])) {
				$idDetilKrs	= $_POST['idDetilKrs'];
				$idKrs	= $_POST['idKrs'];
				$idMk	= $_POST['idMk'];
				$uts	= $_POST['uts'];
				$uas	= $_POST['uas'];
				// $praktikum	= $_POST['praktikum'];
				$tugas	= $_POST['tugas'];
				

				$update = $this->model->update_mhs($idDetilKrs,$idKrs,$idMk,$uts, $uas,$tugas);
				if ($update == true) {
					echo "<script>alert('Data berhasil diupdate');location='index.php?lihat=utama/index_detailkrs'</script>";
				}else{
					echo "<script>alert('Data gagal diupdate);location='index.php?lihat=utama/index_detailkrs'</script>";
				}
			}
	
		}

	}

 ?>