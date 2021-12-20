<?php
if (isset($_POST['date'])) {
    $date = $_POST['date'];
}else{
    $date = date("m/d/Y");
}
$query=mysqli_query($conn,"SELECT*FROM siswa");
?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Absensi</h3>
                            <p class="text-muted">
                            <form action="?page=absensi" method="post">
                                <input type="input" name="date" id="datepicker" class="form-control" onchange="this.form.submit()" value="<?php echo $date ?>">
                            </form>                                
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th width="20" rowspan="2"><input type="checkbox" onclick="toggle(this)"></th>
                                            <th>NO</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th><div align="center">M</div></th>
                                            <th><div align="center">A</div></th>
                                            <th><div align="center">I</div></th>
                                            <th><div align="center">S</div></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $count=0;
                                    while($tampil=mysqli_fetch_array($query))   
                                    {
                                        $count++
                                    ?>
                                        <tr>
                                            <td><input type="checkbox"  name="dipilih[]" value="<?php echo $tampil['nip']; ?>"></td>
                                            <td> <?php echo $count;?> </td>
                                            <td><?php echo $tampil['nis'];?></td>
                                            <td><?php echo $tampil['nama_siswa'];?></td>
                                            <?php
                                            $qabsen = mysqli_query($conn,"select * from absen_siswa where nis = '".$tampil['nis']."' AND tgl = '".$date."'");
                                            $row = mysqli_num_rows($qabsen);
                                            if ($row >= 1) {
                                                while ($dabsen = mysqli_fetch_array($qabsen)) {
                                                    if ($dabsen['ket']=="m") {
                                                        echo "<td align='center'><i class='fa fa-check'></i></td><td align='center'></td><td align='center'></td><td align='center'></td>";
                                                    }elseif ($dabsen['ket']=="a") {
                                                        echo "<td align='center'></td><td align='center'><i class='fa fa-check'></i></td><td align='center'></td><td align='center'></td>";
                                                    }elseif ($dabsen['ket']=="i") {
                                                        echo "<td align='center'></td><td align='center'></td><td align='center'><i class='fa fa-check'></i></td><td align='center'></td>";
                                                    }elseif ($dabsen['ket']=="s") {
                                                        echo "<td align='center'></td><td align='center'></td><td align='center'></td><td align='center'><i class='fa fa-check'></i></td>";
                                                    }else{
                                                        echo "<td colspan='4'>Belum melakukan absensi</td";
                                                    }
                                                }
                                            }else{
                                                echo "<td colspan='4' align='center'><i class='fa fa-close'></i> Belum melakukan absensi</td";
                                            }
                                            ?>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->