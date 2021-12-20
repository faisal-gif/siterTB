<?php
include "koneksi.php";
$nis=$_POST['nis'];
$nama_siswa=$_POST['nama_siswa'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$nama_orangtua=$_POST['nama_orangtua'];
$no_telp=$_POST['no_telp'];

$query=mysql_query("UPDATE siswa SET nama_siswa='$nama_siswa',alamat='$alamat',jenis_kelamin='$jenis_kelamin',agama='$agama',nama_orangtua='$nama_orangtua',no_telp='$no_telp'  WHERE nis='$nis'");

if($query)
{
header('location:../../html/?page=show-siswa');
}
else
{
echo "Data gagal disimpan";
}
?>
