<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include "koneksi.php";
$query=mysql_query("SELECT*FROM mapel");
?>
<table border="1" align="center">
<tr>
<th bgcolor="#00FFFF">Kode Mapel</th>
<th bgcolor="#CC3399">Nama Mata Pelajaran</th>
<th bgcolor="#FF3399">Nip</th>
<th bgcolor="#FF3399">Aksi</th>
</tr>
<?php
while($tampil=mysql_fetch_row($query))
{
?>
<tr>
<td bgcolor="#66CCFF"><?php echo $tampil[0];?></td>
<td bgcolor="#CCCCCC"><?php echo $tampil[1];?></td>
<td bgcolor="#66CCFF"><?php echo $tampil[2];?></td>
<td><?php echo"<a href='edit_mapel.php?id=$tampil[0]'>Update</a>"; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>