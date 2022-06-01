<?php 
$koneksi = mysqli_connect("localhost","root","","undangan_agus");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>