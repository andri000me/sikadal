	<?php require_once "header.php" ?>
	
				<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3"><a href="pengembalian.php">PENGEMBALIAN BARANG</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Barang Kembali</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase"> </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead class="table-danger">
                        <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Nama Peminjam</th>
						  <th>Keperluan</th>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Kembali</th>
                          <th>Keterangan</th>
						  <th>AKSI</th>
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
                          <td> <a href="editpengembalian.php?id_pengembalian=<?php echo $lihat['id']; ?>"
                           class="btn btn-danger">Edit</a></td>
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
	
	<?php require_once "footer.php" ?>