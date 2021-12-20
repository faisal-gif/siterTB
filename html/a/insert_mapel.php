<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include "koneksi.php";


$kd_mapel=$_POST['kd_mapel'];
$nama_mapel=$_POST['nama_mapel'];
$nip=$_POST['nip'];




$query=mysql_query("insert into mapel(kd_mapel,nama_mapel,nip) values('$kd_mapel','$nama_mapel','$nip')");
header ("location:../../html/index.php?page=data");





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
