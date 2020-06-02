<?php
	require_once 'model/mahasiswa/MyModel.php';
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
			include 'view/mahasiswa/view_data.php';

		}

		public function insert_data(){
			include 'view/mahasiswa/form_insert.php';
		}

		public function do_insert(){

			if (isset($_POST['simpan'])) {
				$npm	= $_POST['npm'];
				$nama	= $_POST['nama'];
				$alamat	= $_POST['alamat'];
				$password = $_POST['password'];
				$status = $_POST['status'];

				$save = $this->model->insert_mhs($npm,$nama,$alamat,$password,$status);
				if ($save == true) {
					echo "<script>alert('Data berhasil ditambahkan');location='index.php?lihat=utama/index_mahasiswa'</script>";
				}else{
					echo "<script>alert('Data gagal ditambah');location='index.php?lihat=utama/index_mahasiswa'</script>";
				}
			}

		}

		public function delete_data(){

			$npm = $_GET['npm'];
			$this->model->deleteData($npm);
			$this->redirect('index.php?lihat=utama/index_mahasiswa');

		}

		public function get_update_data(){
			$npm = $_GET['npm'];
			$data = $this->model->getById($npm);
			include 'view/mahasiswa/form_update.php';
		}

		public function do_update(){

			if (isset($_POST['submit'])) {
				$npm 	  = $_POST['npm'];
				$nama 	  = $_POST['nama'];
				$alamat 	  = $_POST['alamat'];
				$password = $_POST['password'];
				$status = $_POST['status'];

				$update = $this->model->update_mhs($npm,$nama,$alamat,$password,$status);
				if ($update == true) {
					echo "<script>alert('Data berhasil diupdate');location='index.php?lihat=utama/index_mahasiswa'</script>";
				}else{
					echo "<script>alert('Data gagal diupdate);location='index.php?lihat=utama/index_mahasiswa'</script>";
				}
			}
	
		}

	}

 ?>