<?php
include "koneksi.php";
mysql_query("select*from guru where nama_guru like '%".$_POST['search']."%' ");
?>
