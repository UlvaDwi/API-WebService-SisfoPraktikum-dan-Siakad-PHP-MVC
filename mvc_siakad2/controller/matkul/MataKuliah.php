<?php
	require_once 'model/matkul/MyModel.php';
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
			include 'view/matkul/view_data.php';

		}

		public function insert_data(){
			include 'view/matkul/form_insert.php';
		}

		public function do_insert(){

			if (isset($_POST['simpan'])) {
				// $idMk	= $_POST['idMk'];
				$namaMk	= $_POST['namaMk'];
				$tahunAjaran	= $_POST['tahunAjaran'];
				
				$save = $this->model->insert_mhs($namaMk,$tahunAjaran);
				if ($save == true) {
					echo "<script>alert('Data berhasil ditambahkan');location='index.php?lihat=utama/index_matkul'</script>";
				}else{
					echo "<script>alert('Data gagal ditambah');location='index.php?lihat=utama/index_matkul'</script>";
				}
			}

		}

		public function delete_data(){

			$idMk = $_GET['idMk'];
			$this->model->deleteData($idMk);
			$this->redirect('index.php?lihat=utama/index_matkul');

		}

		public function get_update_data(){
			$idMk = $_GET['idMk'];
			$data = $this->model->getById($idMk);
			include 'view/matkul/form_update.php';
		}

		public function do_update(){

			if (isset($_POST['submit'])) {
				$idMk	  = $_POST['idMk'];
				$namaMk	  = $_POST['namaMk'];
				$tahunAjaran= $_POST['tahunAjaran'];
				

				$update = $this->model->update_mhs($idMk,$namaMk,$tahunAjaran);
				if ($update == true) {
					echo "<script>alert('Data berhasil diupdate');location='index.php?lihat=utama/index_matkul'</script>";
				}else{
					echo "<script>alert('Data gagal diupdate);location='index.php?lihat=utama/index_matkul'</script>";
				}
			}
	
		}

	}

 ?>