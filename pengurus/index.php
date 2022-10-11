    <?php require_once "../templates/header.php" ?>

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">TOTAL BARANG</h5>
										<?php
											require '../config/koneksi.php';
										$query = $mysqli->query("SELECT count(id_brg) as a FROM barang");
										$data = mysqli_fetch_assoc($query);
											?>
										<p class="my-1"><?php echo $data['a']; ?> Stok Barang Saat Ini</p>
										<p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i> </p>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-archive'></i>
									</div>
								</div>
								<div id="chart1"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">TOTAL USER</h5>
										<?php
											require '../config/koneksi.php';
										$query = $mysqli->query("SELECT count(id_user) as a FROM user");
										$data = mysqli_fetch_assoc($query);
											?>
										<p class="my-1"><?php echo $data['a']; ?> User Terdaftar</p>
										<p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i> </p>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
									</div>
								</div>
								<div id="chart2"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">TOTAL PEMINJAMAN</h5>
										<?php
											require '../config/koneksi.php';
										$query = $mysqli->query("SELECT count(id_peminjaman) as a FROM peminjaman");
										$data = mysqli_fetch_assoc($query);
											?>
										<p class="my-1"><?php echo $data['a']; ?> Peminjaman Barang</p>
										<p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i> </p>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-news'></i>
									</div>
								</div>
								<div id="chart3"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">LAPORAN PEMINJAMAN</h5>
							</div>
							<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
							</div>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-danger">
									<tr>
										<th>NO</th>
										<th>KODE PINJAM</th>
										<th>NAMA BARANG</th>
										<th>NAMA PEMINJAM</th>
										<th>TANGGAL PINJAM</th>
										<th>KEPERLUAN</th>
										<th>STATUS</th>
									</tr>
								</thead>
							<?php
								$sql = "SELECT peminjaman.id_peminjaman, peminjaman.kode_pinjam, peminjaman.status, peminjaman.id_user, peminjaman.tgl_pinjam, peminjaman.keperluan, barang.nama_brg, user.nama_lengkap FROM peminjaman JOIN barang ON peminjaman.id_brg=barang.id_brg JOIN user ON user.id_user=peminjaman.id_user ORDER BY peminjaman.id_peminjaman DESC";
								$query = $mysqli->query($sql);
								$no = 1;
								while ($lihat=mysqli_fetch_array($query)){
							?>
								<tbody>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $lihat ['kode_pinjam']; ?></td>
										<td><?php echo $lihat ['nama_brg']; ?></td>
										<td><?php echo $lihat ['nama_lengkap'];?></td>
										<td><?php echo date('d-m-Y',strtotime($lihat['tgl_pinjam'])); ?></td>
										<td><?php echo $lihat ['keperluan'];?></td>
										<td><span class="text btn-sm btn-<?php echo $lihat['status'] == 1 ? 'success' : 'danger' ?>"><?php echo $lihat['status'] == 1 ? 'sudah dikembalikan' : 'belum dikembalikan'; ?></span></td>										
									</tr>
								</tbody>
								<?php
								} ?>
							</table>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">LAPORAN PENGEMBALIAN</h5>
							</div>
							<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
							</div>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
                    <thead class="table-danger">
                        <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Nama Peminjam</th>
						  <th>Keperluan</th>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Kembali</th>
                          <th>Keterangan</th>
                        </tr>
                     </thead>
                      <?php
                     $sql = "SELECT pengembalian.*,
                            barang.id_brg,
                            barang.nama_brg,
                            peminjaman.id_peminjaman,
                            peminjaman.tgl_pinjam,
							peminjaman.keperluan,
                            peminjaman.status,
                            user.id_user,
                            user.nama_lengkap
                            FROM pengembalian JOIN barang ON pengembalian.id_brg=barang.id_brg JOIN user ON pengembalian.id_user=user.id_user JOIN peminjaman ON
                            peminjaman.id_peminjaman=pengembalian.id_peminjaman WHERE peminjaman.status=1";
                     $query = $mysqli->query($sql);
                     $no = 1;
                     while ($lihat=mysqli_fetch_array($query)){
                      ?>
                       <tbody>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $lihat['nama_brg']; ?></td>
                          <td><?php echo $lihat['nama_lengkap'];?></td>
						  <td><?php echo $lihat['keperluan'];?></td>
                          <td><?php echo $lihat['tgl_pinjam']; ?></td>
                          <td><?php echo $lihat['tgl_kembali']; ?></td>
						  <td><?php echo $lihat['keterangan']; ?></td>
                          </tr>
								<?php
								} ?>
							 </tbody>
						  </table>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		
    <?php require_once "../templates/footer.php" ?>