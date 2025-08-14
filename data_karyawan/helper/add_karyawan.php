<?php
include 'koneksi.php';
//mengambil nilai post

$nama_pegawai = $_POST['nama_pegawai'];
$jabatan = $_POST['jabatan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$shift_kerja = $_POST['shift_kerja'];
$tanggal_lahir = $_POST['tanggal_lahir'];

//query
$query_simpan = "INSERT INTO data_pegawai (nama_pegawai, jabatan, jenis_kelamin, shift_kerja, tanggal_lahir) 
				values ('$nama_pegawai', '$jabatan', '$jenis_kelamin', '$shift_kerja', '$tanggal_lahir') ";

$simpan = mysqli_query($db, $query_simpan);

//cek
if ($simpan) {
	header("location: ../index.php");
} else {
	echo "gagal";
}
