<?php
	require_once 'model/krs/MyModel.php';
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
			include 'view/krs/view_data.php';

		}

		public function insert_data(){
			include 'view/krs/form_insert.php';
		}

		public function do_insert(){

			if (isset($_POST['simpan'])) {
				$npm	= $_POST['npm'];
				$tahunAjaran	= $_POST['tahunAjaran'];
				
				$save = $this->model->insert_mhs($npm,$tahunAjaran);
				if ($save == true) {
					echo "<script>alert('Data berhasil ditambahkan');location='index.php?lihat=utama/index_krs'</script>";
				}else{
					echo "<script>alert('Data gagal ditambah');location='index.php?lihat=utama/index_krs'</script>";
				}
			}

		}

		public function delete_data(){

			$idKrs = $_GET['idKrs'];
			$this->model->deleteData($idKrs);
			$this->redirect('index.php?lihat=utama/index_krs');

		}

		public function get_update_data(){
			$idKrs = $_GET['idKrs'];
			$data = $this->model->getById($idKrs);
			include 'view/krs/form_update.php';
		}

		public function do_update(){

			if (isset($_POST['submit'])) {
				$idKrs  = $_POST['idKrs'];
				$npm	  = $_POST['npm'];
				$tahunAjaran= $_POST['tahunAjaran'];
				

				$update = $this->model->update_mhs($idKrs,$npm,$tahunAjaran);
				if ($update == true) {
					echo "<script>alert('Data berhasil diupdate');location='index.php?lihat=utama/index_krs'</script>";
				}else{
					echo "<script>alert('Data gagal diupdate);location='index.php?lihat=utama/index_krs'</script>";
				}
			}
	
		}

	}

 ?>