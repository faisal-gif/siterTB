                <!-- /.row -->
                <!-- .row -->
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
                <!-- /.row2 -->
                                   <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="a/insert_siswa.php">
                                <h1 align="center"> Siswa </h1>
                                <div class="form-group">
                                    <label class="col-md-12">NIS</label>
                                    <div class="col-md-12">
                                        <input type="text" type="text" name="nis" placeholder="NIS" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama Siswa</label>
                                    <div class="col-md-12">
                                        <input type="text" type="text" name="nama_siswa" placeholder="Nama" class="form-control form-control-line"> </div>
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
                                    <label class="col-md-12">Nama Orang tua</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Alamat" class="form-control form-control-line" name="nama_orangtua" id="alamat"> </div>
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
                     <!-- /.row2 -->
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