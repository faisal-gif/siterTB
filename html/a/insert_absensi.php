<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include "koneksi.php";


$nip=$_POST['nip'];
$absensi=$_POST['absensi'];




$query=mysql_query("insert into absensi(nip,absensi) values('$nip','$absensi')");
header ("location:show_absensi.php");





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
