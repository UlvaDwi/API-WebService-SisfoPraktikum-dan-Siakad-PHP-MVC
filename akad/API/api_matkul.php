<?php 

require_once 'dbConnect.php';
$sql = "select * from mk";
$result = mysqli_query($con,$sql);

$number_of_rows = mysqli_num_rows($result);
$temp_array = array();
if($number_of_rows > 0){
	while ($row = mysqli_fetch_assoc($result)){
		array_push($temp_array, array(
			"idMk"=>$row['idMk'],
			"namaMK" =>$row['namaMk']
		));
	}
}else{
	echo "tidak ada data";
}
echo json_encode($temp_array);
?>