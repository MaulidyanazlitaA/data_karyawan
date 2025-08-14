<?php
include 'koneksi.php';

//mengambil Nilai Post
$id = $_POST['id'];
$nama_karyawan = $_POST['nama_karyawan'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$shift_kerja = $_POST['shift_kerja'];
$tanggal_lahir = $_POST['tanggal_lahir'];

//query 
$query_update = "UPDATE data_pegawai SET 
				nama_karyawan='$nama_karyawan',
				jabatan='$jabatan',
				jenis_kelamin='$jenis_kelamin',
				shift_kerja='$shift_kerja',
				tanggal_lahir='$tanggal_lahir'
				WHERE id='$id'";
$update = mysqli_query($db, $query_update);

if ($update) {
	header("location: ../index.php");
} else {
	echo "gagal";
}

