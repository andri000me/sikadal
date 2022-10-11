    <?php require_once "header.php" ?>
	
			<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3"><a href="index.php">DATA PEMINJAMAN BARANG</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">List Peminjaman</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light"><a href="tambahpeminjaman.php">Input Pinjam</a></button>
						</div>
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
										<th>NO</th>
										<th>KODE PINJAM</th>
										<th>NAMA BARANG</th>
										<th>NAMA PEMINJAM</th>
										<th>TANGGAL PINJAM</th>
										<th>KEPERLUAN</th>
										<th>STATUS</th>
										<th>EDIT</th>
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
										<td><div class="d-flex order-actions"><a href="editpeminjaman.php?id_peminjaman=<?php echo $lihat['id_peminjaman']; ?>"><i class="bx bx-pencil"></i></a></div></td>										
									</tr>
								</tbody>
								<?php
								} ?>
							</table>
						</div>
					</div>
				</div>
			<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
	
	<?php require_once "footer.php" ?>