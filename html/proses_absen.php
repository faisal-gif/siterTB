<?php
include 'a/koneksi.php';
date_default_timezone_set("Asia/Jakarta");
if (isset($_GET['act'])) {
	$act = $_GET['act'];
	if ($act == "absen-masuk") {
		$nis = $_GET['nis'];
		$date = date("m/d/Y");
		$query = mysqli_query($conn,"insert into absen_siswa values ('','".$nis."','".$date."','m')");
		header("location:index.php?page=absen-siswa");
	}elseif ($act == "absen-alpha") {
		$nis = $_GET['nis'];
		$date = date("m/d/Y");
		$query = mysqli_query($conn,"insert into absen_siswa values ('','".$nis."','".$date."','a')");
		header("location:index.php?page=absen-siswa");
	}elseif ($act == "absen-ijin") {
		$nis = $_GET['nis'];
		$date = date("m/d/Y");
		$query = mysqli_query($conn,"insert into absen_siswa values ('','".$nis."','".$date."','i')");
		header("location:index.php?page=absen-siswa");
	}elseif ($act == "absen-sakit") {
		$nis = $_GET['nis'];
		$date = date("m/d/Y");
		$query = mysqli_query($conn,"insert into absen_siswa values ('','".$nis."','".$date."','s')");
		header("location:index.php?page=absen-siswa");
	}
}
?>