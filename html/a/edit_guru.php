<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
if($db->data("guru") != 0){
  foreach ($db->data("guru") as $data) {
?>
<form name="form1" method="POST" action="update_guru.php">
 <p align="center">GURU</p>
  <div align="center">
    <table width="345" border="0">
      <tr>
        <td width="143">NIP</td>
        <td width="165">:
          <label>
            <input type="text" name="nip" value="<?php echo $row['nip'];?>" >
          </label></td>
      </tr>
      <tr>
        <td>Nama Guru</td>
        <td>:
          <label>
            <input type="text" name="nama_guru" value="<?php echo $row['nama_guru'];?>" >
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
