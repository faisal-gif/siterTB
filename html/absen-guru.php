<?php
include "a/koneksi.php";
?>
                                                          <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="a/insert_absensi.php">

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
                                        <button class="btn btn-success" name="submit">absen</button>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>