<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "koneksi.php";
$kd_mapel=$_GET['id'];
$query=mysql_query("select*from mapel where kd_mapel='$kd_mapel'");
$row=mysql_fetch_array($query);	
?>
<form name="form1" method="POST" action="update_mapel.php">
 <p align="center">MAPEL</p>
  <div align="center">
    <table width="345" border="0">
      <tr>
        <td width="143">KODE MAPEL</td>
        <td width="165">:
          <label>
            <input type="text" name="kd_mapel" value="<?php echo $row['kd_mapel'];?>" >
          </label></td>
      </tr>
      <tr>
        <td>Nama Mata Pelajaran</td>
        <td>:
          <label>
            <input type="text" name="nama_mapel" value="<?php echo $row['nama_mapel'];?>" >
          </label></td>
      </tr>
	   <tr>
        <td>NIP</td>
        <td>:
          <label>
            <input type="text" name="nip" value="<?php echo $row['nip'];?>" >
          </label></td>
      </tr> 
 
      <tr>
        <td>&nbsp;</td>
        <td align="right"> <br> <label>
          <input type="submit" name="Submit" value="Simpan" >
        </label></td>
      </tr>
    </table>
  </div>
  <p align="center">&nbsp;  </p>
</form>
</body>
</html>
