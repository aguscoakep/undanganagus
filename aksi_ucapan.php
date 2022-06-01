<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$ucapan = $_POST['ucapan'];

// menginput data ke database
mysqli_query($koneksi,"insert into doa values('','$nama','$ucapan')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>