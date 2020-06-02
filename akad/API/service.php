<?php
$koneksi = mysqli_connect("localhost","root","","demosiakad");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// membaca username dari GET request
$user = $_GET['username'];
$pass = $_GET['password'];
// $api = $_GET['123'];

if (isset($user)&& isset($pass))
{
	$query = "SELECT * FROM mahasiswa WHERE npm = '$user'";
	$hasil = mysqli_query($koneksi, $query);
	$data  = mysqli_fetch_array($hasil);
	$password = $data['password'];

	if ($pass == $password) $response = "TRUE";
	else $response = "FALSE";
}
else $response = "FALSE";

header('Content-Type: text/xml');
echo "<?xml version='1.0'?>";
echo "<data>";
echo "<response>".$response."</response>";
echo "</data>";
?>