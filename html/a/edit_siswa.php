<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "koneksi.php";
$nis=$_GET['id'];
$query=mysql_query("select*from siswa where nis='$nis'");
$row=mysql_fetch_array($query);	
?>
<form name="form1" method="POST" action="update_siswa.php">
 <p align="center">SISWA</p>
  <div align="center">
    <table width="345" border="0">
      <tr>
        <td width="143">NIS</td>
        <td width="165">:
          <label>
            <input type="text" name="nis" value="<?php echo $row['nis'];?>" >
          </label></td>
      </tr>
      <tr>
        <td>Nama Siswa</td>
        <td>:
          <label>
            <input type="text" name="nama_siswa" value="<?php echo $row['nama_siswa'];?>" >
          </label></td>
      </tr>
	   <tr>
        <td>Alamat</td>
        <td>:
          <label>
            <input type="text" name="alamat" value="<?php echo $row['alamat'];?>" >
          </label></td>
      </tr>
	  <td>Jenis Kelamin  </td>
<td> : <INPUT CHECKED TYPE="Radio" NAME="jenis_kelamin" value="<?php echo $row['jenis_kelamin'];?>">P
<INPUT TYPE="Radio" NAME="jenis_kelamin" value="<?php echo $row['jenis_kelamin'];?>" >L <BR></td>
</tr>
	  <tr>
        <td width="143">Agama</td>
		<td>:
          <select name="agama" value="<?php echo $row['agama'];?>" >
		  <option>Islam</option>
		   <option>Kristen</option>
		    <option>Katolik</option>
			 <option>Hindu</option>
			  <option>Buddha</option>
          </select> </td>   
      </tr>
	  <tr>
        <td>nama_orangtua</td>
        <td>:
          <label>
            <input type="text" name="nama_orangtua" value="<?php echo $row['nama_orangtua'];?>" >
          </label></td>
      </tr>
 <tr>
        <td>No Telp</td>
        <td>:
          <label>
            <input type="text" name="no_telp" value="<?php echo $row['no_telp'];?>" >
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
