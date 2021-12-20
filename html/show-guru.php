               <!-- /row -->
                


                <?php
include "a/koneksi.php";
$query=mysqli_query($conn,"SELECT*FROM guru");
if (isset($_GET['search'])) {
    $src = $_GET['search'];
}else{
    $src = "";
}
?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Guru</h3>
                            <p class="text-muted">Daftar Guru</p>
                            <div class="table-responsive">
                                <form role="search" class="app-search hidden-sm hidden-xs m-r-10" action="index.php" method="get">
                            <input type="hidden" name="page" value="show-guru">
                            <input type="text" placeholder="Search..." class="form-control" name="search" value="<?php echo $src ?>"> <i class="fa fa-search"></i></a> 
                        </form>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" onclick="toggle(this)"></th>
                                            <th>NO</th>
                                            <th>NIP</th>
                                            <th>Nama Guru</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>No.Telp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0;
                                        if (isset($_GET['search'])) {
                                            $qsch = mysqli_query($conn,"select*from guru where nama_guru like '%".$src."%' ");
                                            while ($tampil = mysqli_fetch_array($qsch)) {
                                        ?>
                                        <tr>
                                        <th><input type="checkbox"  name="dipilih[]" value="<?php echo $tampil['nip']; ?>"></th>
                                        <td> <?php echo $count;?> </td>
                                        <td ><?php echo $tampil[0];?></td>
                                        <td ><?php echo $tampil[1];?></td>
                                        <td ><?php echo $tampil[2];?></td>
                                        <td ><?php echo $tampil[3];?></td>
                                        <td ><?php echo $tampil[4];?></td>
                                        <td ><?php echo $tampil[5];?></td>
                                        <td><?php echo"<a href=edit-guru.php?id=$tampil[0]>Update</a>"; ?></td>
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
                                            <td ><?php echo $tampil[3];?></td>
                                            <td ><?php echo $tampil[4];?></td>
                                            <td ><?php echo $tampil[5];?></td>
                                            <td><?php echo"<a href=edit-guru.php?id=$tampil[0]>Update</a>"; ?></td>
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
                <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="a/insert_guru.php">
                                <h1 align="center"> Guru </h1>
                                <div class="form-group">
                                    <label class="col-md-12">NIP</label>
                                    <div class="col-md-12">
                                        <input type="text" type="text" name="nip" placeholder="NIP" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama Guru</label>
                                    <div class="col-md-12">
                                        <input type="text" type="text" name="nama_guru" placeholder="Nama" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Alamat</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Alamat" class="form-control form-control-line" name="alamat" id="alamat"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Jenis Kelamin</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="jenis_kelamin" >
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Agama</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="agama">
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Buddha</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="(+62)" class="form-control form-control-line" name="no_telp"> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="submit">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 