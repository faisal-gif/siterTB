<?php
include "koneksi.php";
$kd_mapel=$_POST['kd_mapel'];
$nama_mapel=$_POST['nama_mapel'];
$nip=$_POST['nip'];

$query=mysql_query("update mapel SET nama_mapel='$nama_mapel',nip='$nip' WHERE kd_mapel='$kd_mapel'");
if($query)
{
header('location:../../html/?page=mapel');
}
else
{
echo "Data gagal disimpan";
}
?>
