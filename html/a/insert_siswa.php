<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include "koneksi.php";


$nis=$_POST['nis'];
$nama_siswa=$_POST['nama_siswa'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$nama_orangtua=$_POST['nama_orangtua'];
$no_telp=$_POST['no_telp'];



$query=mysqli_query($conn,"insert into siswa(nis,nama_siswa,alamat,jenis_kelamin,agama,nama_orangtua,no_telp) values('$nis','$nama_siswa','$alamat','$jenis_kelamin','$agama','$nama_orangtua','$no_telp')");
header ("location:../../html/index.php?page=show-siswa");




if($query)
{
echo"<H1>Data berhasil disimpan</H1>";
}
else
{
echo"<H1>Data gagal disimpan</H1>";
}
?>
</body>
</html>
