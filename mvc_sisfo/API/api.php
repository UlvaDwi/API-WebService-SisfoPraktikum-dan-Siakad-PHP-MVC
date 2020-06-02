<?php 
require_once 'dbConnect.php';
$sql = "SELECT * FROM detilkrp INNER JOIN matapraktikum on detilkrp.idMataPraktikum = matapraktikum.idMataPraktikum INNER JOIN krp on detilkrp.idKrp = krp.idKrp ";
$result = mysqli_query($con,$sql);
$number_of_rows = mysqli_num_rows($result);
$temp_array = array();
if($number_of_rows > 0){
	while ($row = mysqli_fetch_assoc($result)){
		$nilai = ($row['uts']*0.35) + ($row['uas']*0.50) + ($row['tugas']*0.15);
		array_push($temp_array, array(
			"npm"=>$row['npm'],
			// "idMk"=>$row['idMk'],
			"nilai"=>$nilai
		));
	}
}else{
	echo "tidak ada data";
}
//var_dump($temp_array)

echo json_encode(array("kirim"=>$temp_array));
?>