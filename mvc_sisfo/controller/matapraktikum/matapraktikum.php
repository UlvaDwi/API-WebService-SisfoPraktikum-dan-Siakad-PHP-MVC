<?php
	require_once 'model/matapraktikum/MyModel.php';
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
			include 'view/matapraktikum/view_data.php';

		}

		public function insert_data(){
			include 'view/matapraktikum/form_insert.php';
		}

		public function do_insert(){

			if (isset($_POST['simpan'])) {
				// $idMataPraktikum	= $_POST['idMataPraktikum'];
				$namaMataPraktikum	= $_POST['namaMataPraktikum'];
				$tahunAjaran	= $_POST['tahunAjaran'];

				$save = $this->model->insert_mhs($namaMataPraktikum,$tahunAjaran);
				if ($save == true) {
					echo "<script>alert('Data berhasil ditambahkan');location='index.php?lihat=utama/index_matapraktikum'</script>";
				}else{
					echo "<script>alert('Data gagal ditambah');location='index.php?lihat=utama/index_matapraktikum'</script>";
				}
			}

		}

		public function delete_data(){

			$idMataPraktikum = $_GET['idMataPraktikum'];
			$this->model->deleteData($idMataPraktikum);
			$this->redirect('index.php?lihat=utama/index_matapraktikum');

		}

		public function get_update_data(){
			$idMataPraktikum = $_GET['idMataPraktikum'];
			$data = $this->model->getById($idMataPraktikum);
			include 'view/matapraktikum/form_update.php';
		}

		public function do_update(){

			if (isset($_POST['submit'])) {
				$idMataPraktikum 	  = $_POST['idMataPraktikum'];
				$namaMataPraktikum 	  = $_POST['namaMataPraktikum'];
				$tahunAjaran 	  = $_POST['tahunAjaran'];

				$update = $this->model->update_mhs($idMataPraktikum,$namaMataPraktikum,$tahunAjaran);
				if ($update == true) {
					echo "<script>alert('Data berhasil diupdate');location='index.php?lihat=utama/index_matapraktikum'</script>";
				}else{
					echo "<script>alert('Data gagal diupdate);location='index.php?lihat=utama/index_matapraktikum'</script>";
				}
			}
	
		}

	}

 ?>