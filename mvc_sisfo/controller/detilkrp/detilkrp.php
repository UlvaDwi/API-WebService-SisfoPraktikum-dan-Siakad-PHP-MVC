<?php
	require_once 'model/detilkrp/MyModel.php';
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
			include 'view/detilkrp/view_data.php';

		}

		public function insert_data(){
			include 'view/detilkrp/form_insert.php';
		}

		public function do_insert(){

			if (isset($_POST['simpan'])) {
				// $idDetilKrp	= $_POST['idDetilKrp'];
				$idKrp	= $_POST['idKrp'];
				$idMataPraktikum	= $_POST['idMataPraktikum'];
				$tugas	= $_POST['tugas'];
				$uts	= $_POST['uts'];
				$uas	= $_POST['uas'];

				$save = $this->model->insert_mhs($idKrp,$idMataPraktikum,$tugas,$uts,$uas);
				
				if ($save == true) {
					echo "<script>alert('Data berhasil ditambahkan');location='index.php?lihat=utama/index_detilkrp'</script>";
				}else{
					echo "<script>alert('Data gagal ditambah');location='index.php?lihat=utama/index_detilkrp'</script>";
				}
			}

		}

		public function delete_data(){

			$idDetilKrp = $_GET['idDetilKrp'];
			$this->model->deleteData($idDetilKrp);
			$this->redirect('index.php?lihat=utama/index_detilkrp');

		}

		public function get_update_data(){
			$idDetilKrp = $_GET['idDetilKrp'];
			$data = $this->model->getById($idDetilKrp);
			include 'view/detilkrp/form_update.php';
		}

		public function do_update(){

			if (isset($_POST['submit'])) {
				$idDetilKrp	= $_POST['idDetilKrp'];
				$idKrp	= $_POST['idKrp'];
				$idMataPraktikum	= $_POST['idMataPraktikum'];
				$tugas	= $_POST['tugas'];
				$uts	= $_POST['uts'];
				$uas	= $_POST['uas'];

				$update = $this->model->update_mhs($idDetilKrp,$idKrp,$idMataPraktikum,$tugas,$uts,$uas);
				if ($update == true) {
					echo "<script>alert('Data berhasil diupdate');location='index.php?lihat=utama/index_detilkrp'</script>";
				}else{
					echo "<script>alert('Data gagal diupdate);location='index.php?lihat=utama/index_detilkrp'</script>";
				}
			}
	
		}

	}

 ?>