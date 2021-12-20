<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include "koneksi.php";
$query=mysql_query("SELECT*FROM siswa");
?>
<table border="1" align="center">
<tr>
<th bgcolor="#00FFFF">NIS</th>
<th bgcolor="#999999">Nama Siswa</th>
<th bgcolor="#00FFFF">Alamat</th>
<th bgcolor="#999999">Jenis Kelamin</th>
<th bgcolor="#FF3399">Agama</th>
<th bgcolor="#00FFFF">Nama Orang Tua</th>
<th bgcolor="#FF3399">No.Telp</th>
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
<td bgcolor="#CCCCCC"><?php echo $tampil[3];?></td>
<td bgcolor="#66CCFF"><?php echo $tampil[4];?></td>
<td bgcolor="#CCCCCC"><?php echo $tampil[5];?></td>
<td bgcolor="#66CCFF"><?php echo $tampil[6];?></td>
<td><?php echo"<a href='edit_siswa.php?id=$tampil[0]'>Update</a>"; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
