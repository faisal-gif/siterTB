<div class="row">
    <div class="col-sm-12">
    	<div class="white-box">
        	<h3 class="box-title">ABSENSI SISWA <b class="pull-right"><?php echo date("d F Y"); ?></b></h3>
            <div class="table-responsive">
            	<table class="table">
					<thead>
						<tr>
							<th width="1%">No</th>
							<th>NIS</th>
							<th>Nama</th>
							<th colspan="4" width="5%">Ket</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 0;
						$query = mysqli_query($conn,"select * from siswa");
						while ($data = mysqli_fetch_array($query)) {
							$no += 1;
						?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $data['nis'] ?></td>
							<td><?php echo $data['nama_siswa'] ?></td>
							<?php
							$qabsen = mysqli_query($conn,"select * from absen_siswa where nis ='".$data['nis']."'");
							$rabsen = mysqli_num_rows($qabsen);
							if ($rabsen >= 1) {
								while ($dabsen = mysqli_fetch_array($qabsen)) {
									if ($dabsen['ket'] == "m") {
										echo '<td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a></td>';
									}elseif ($dabsen['ket'] == "a") {
										echo '<td><a href="" class="btn btn-danger btn-sm">A</a></td>';
									}elseif ($dabsen['ket'] == "i") {
										echo '<td><a href="" class="btn btn-warning btn-sm">I</a></td>';
									}elseif ($dabsen['ket'] == "s") {
										echo '<td><a href="" class="btn btn-info btn-sm">S</a></td>';
									}
								}
							}else{
								echo '<td><a href="proses_absen.php?act=absen-masuk&nis='.$data['nis'].'" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a></td>
							<td><a href="proses_absen.php?act=absen-alpha&nis='.$data['nis'].'" class="btn btn-danger btn-sm">A</a></td>
							<td><a href="proses_absen.php?act=absen-ijin&nis='.$data['nis'].'" class="btn btn-warning btn-sm">I</a></td>
							<td><a href="proses_absen.php?act=absen-sakit&nis='.$data['nis'].'" class="btn btn-info btn-sm">S</a></td>';
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