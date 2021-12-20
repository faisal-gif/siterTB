                <!-- /row -->
                <?php
include "a/koneksi.php";
$query=mysqli_query($conn,"SELECT*FROM Mapel");
if (isset($_GET['search'])) {
    $src = $_GET['search'];
}else{
    $src = "";
}
?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">MATA PELAJARAN</h3>
                            <p class="text-muted">Daftar MATA PELAJARAN</p>
                            <div class="table-responsive">
                                <form role="search" class="app-search hidden-sm hidden-xs m-r-10" action="index.php" method="get">
                            <input type="hidden" name="page" value="show-mapel">
                            <input type="text" placeholder="Search..." class="form-control" name="search" value="<?php echo $src ?>"> <i class="fa fa-search"></i></a> 
                        </form>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" onclick="toggle(this)"></th>
                                            <th>NO</th>
                                            <th>Kode Mapel</th>
                                            <th>Mata Pelajaran</th>
                                            <th>NIP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0;
                                        if (isset($_GET['search'])) {
                                            $qsch = mysqli_query($conn,"select*from mapel where nama_mapel like '%".$src."%' ");
                                            while ($tampil = mysqli_fetch_array($qsch)) {
                                        ?>
                                    <tr>
                                    <th><input type="checkbox"  name="dipilih[]" value="<?php echo $tampil['nip']; ?>"></th>
                                    <td> <?php echo $count;?> </td>
                                    <td ><?php echo $tampil[0];?></td>
                                    <td ><?php echo $tampil[1];?></td>
                                    <td ><?php echo $tampil[2];?></td>
                                    <td><?php echo"<a href='edit-mapel.php?id=$tampil[0]'>Update</a>"; ?></td>
                                        </tr>
                                             <?php
                                            }
                                        }else{
                                           while($tampil=mysqli_fetch_row($query)){
                                            $count++
                                            ?> 
                                            <tr>
                                            <th><input type="checkbox"  name="dipilih[]" value="<?php echo $tampil['nip']; ?>"></th>
                                            <td> <?php echo $count;?> </td>
                                            <td ><?php echo $tampil[0];?></td>
                                            <td ><?php echo $tampil[1];?></td>
                                            <td ><?php echo $tampil[2];?></td>
                                            <td><?php echo"<a href=edit-mapel.php?id=$tampil[0]>Update</a>"; ?></td>
                                            </tr>
                                            <?php
                                            }
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <?php
include "a/koneksi.php";
?>
                                                          <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="a/insert_mapel.php">
                                <h1 align="center"> Mata Pelajaran </h1>
                                <div class="form-group">
                                    <label class="col-md-12">Kode Mapel</label>
                                    <div class="col-md-12">
                                        <input type="text" type="text" name="kd_mapel" placeholder="Kode Mapel" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama Mapel</label>
                                    <div class="col-md-12">
                                        <input type="text" type="text" name="nama_mapel" placeholder="Nama Mapel" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">NIP</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="nip">
                                             <?php
                                             $lk=mysql_query("select * from guru");
                                             if ($lk != 0) {
                                                while ($s=mysql_fetch_array($lk)) {
                                            ?>
                                            <option><?php echo $s['nip'] ?></option>
                                            <?php
                                                }
                                             }
                                             ?>
                        
                                        </select>
                                    </div>
                                     </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="submit">Tambah</button>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>