<?php
include "koneksi.php";
$nip=$_POST['nip'];
$nama_guru=$_POST['nama_guru'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$no_telp=$_POST['no_telp'];

$query=mysql_query("UPDATE guru SET nama_guru='$nama_guru',alamat='$alamat',jenis_kelamin='$jenis_kelamin',agama='$agama',no_telp='$no_telp'  WHERE nip='$nip'");

if($query)
{
header('location:../../html/?page=show-guru');
}
else
{
echo "Data gagal disimpan";
}
?>
