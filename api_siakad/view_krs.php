<?php 

	require_once('koneksi.php');

	$sql = "select * from krs";
	$result = mysqli_query($con,$sql);

$number_of_rows = mysqli_num_rows($result);
$temp_array = array();

if($number_of_rows > 0){
	while ($row = mysqli_fetch_assoc($result)){
		array_push($temp_array, array(
			"idKrs"=>$row['idKrs'],
			"npm"=>$row['npm'],
			"tahunAjaran"=>$row['tahunAjaran']
		));
	}
}else{
	echo "tidak ada data";
}
//var_dump($temp_array)

	echo json_encode(array("kirim"=>$temp_array));
 ?>