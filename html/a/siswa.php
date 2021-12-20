<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="insert_siswa.php">
 <p align="center">SISWA</p>
  <div align="center">
    <table width="345" border="0">
      <tr>
        <td width="143">NIS</td>
        <td width="165">
          <label>
            <input type="text" name="nis" />
          </label></td>
      </tr>
      <tr>
        <td>Nama Siswa</td>
        <td>
          <label>
            <input type="text" name="nama_siswa" />
          </label></td>
      </tr>
	    <tr>
        <td width="143">Alamat</td>
        <td width="165">
          <label>
            <input type="text" name="alamat" />
          </label></td>
      </tr>
	  <tr>
<td>Jenis Kelamin  </td>
<td> : <INPUT CHECKED TYPE="Radio" NAME="jenis_kelamin" VALUE="Perempuan">P
<INPUT TYPE="Radio" NAME="jenis_kelamin" VALUE="Laki_laki">L<BR></td>
</tr>
  <tr>
        <td width="143">Agama</td>
        <td width="165">
          <select name="agama">
		  <option>Islam</option>
		   <option>Kristen</option>
		    <option>Katolik</option>
			 <option>Hindu</option>
			  <option>Buddha</option>
          </select>         
      </tr>
	     <tr>
        <td>Nama Orang Tua</td>
        <td>
          <label>
            <input type="text" name="nama_orangtua" />
          </label></td>
      </tr>
	     <tr>
        <td>No.Telp</td>
        <td>
          <label>
            <input type="text" name="no_telp" />
          </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right"> <br> <label>
          <input type="submit" name="Submit" value="Submit" />
        </label></td>
      </tr>
    </table>
  </div>
  <p align="center">&nbsp;  </p>
</form>
</body>
</html>
