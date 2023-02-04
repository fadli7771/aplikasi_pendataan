<?php
include "koneksi.php";

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$informasi = $_POST['informasi'];

$input = mysqli_query ($mysqli, "insert into admin set nama='$nama', tanggal='$tanggal', informasi='$informasi'");

if ($input){
		header ('location:tampil_admin.php?status=sukses');
	}else{
		header ('location:tampil_admin.php?status=gagal');
	}
?>