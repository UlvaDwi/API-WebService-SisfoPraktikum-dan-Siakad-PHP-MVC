<?php
	require_once 'model/krp/MyModel.php';
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
			include 'view/krp/view_data.php';

		}

		public function insert_data(){
			include 'view/krp/form_insert.php';
		}

		public function do_insert(){

			if (isset($_POST['simpan'])) {
				// $idKrp	= $_POST['idKrp'];
				$npm	= $_POST['npm'];
				$tahunAjaran	= $_POST['tahunAjaran'];
				$tanggal	= $_POST['tanggal'];

				$save = $this->model->insert_mhs($npm,$tahunAjaran,$tanggal);
				if ($save == true) {
					echo "<script>alert('Data berhasil ditambahkan');location='index.php?lihat=utama/index_krp'</script>";
				}else{
					echo "<script>alert('Data gagal ditambah');location='index.php?lihat=utama/index_krp'</script>";
				}
			}

		}

		public function delete_data(){

			$idKrp = $_GET['idKrp'];
			$this->model->deleteData($idKrp);
			$this->redirect('index.php?lihat=utama/index_krp');

		}

		public function get_update_data(){
			$idKrp = $_GET['idKrp'];
			$data = $this->model->getById($idKrp);
			include 'view/krp/form_update.php';
		}

		public function do_update(){

			if (isset($_POST['submit'])) {
				$idKrp 	  = $_POST['idKrp'];
				$npm 	  = $_POST['npm'];
				$tahunAjaran 	  = $_POST['tahunAjaran'];
				$tanggal = $_POST['tanggal'];

				$update = $this->model->update_mhs($idKrp,$npm,$tahunAjaran,$tanggal);
				if ($update == true) {
					echo "<script>alert('Data berhasil diupdate');location='index.php?lihat=utama/index_krp'</script>";
				}else{
					echo "<script>alert('Data gagal diupdate);location='index.php?lihat=utama/index_krp'</script>";
				}
			}
	
		}

	}

 ?>