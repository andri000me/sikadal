    <?php require_once "../templates/header.php" ?>
	
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">EDIT DATA PEMINJAMAN</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="tambahbrg.php">Input Barang</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light"><a href="peminjaman.php">List Pinjam</a></button>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-7 mx-auto">
						<h6 class="mb-0 text-uppercase"> </h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-edit me-1 font-22 text-white"></i>
									</div>
									<h5 class="mb-0 text-white">EDIT DATA PEMINJAMAN</h5>
								</div>
								<hr>
								<form class="row g-3" action="proseseditpeminjaman.php" method="post">
									<div class="col-12">
										<label for="" class="form-label">ID</label>
								<?php
									$id = $_GET['id_peminjaman'];
									$query = $mysqli->query("SELECT * FROM peminjaman INNER JOIN user ON peminjaman.id_user=user.id_user where id_peminjaman='$id'");
									$qu = mysqli_fetch_array($query);
								?>
										<div class="input-group">
									<input type="text" disable value="<?php echo $qu['id_peminjaman'] ?>" name="id" class="form-control" placeholder="" disabled>
									<input type="hidden" value="<?= $qu['id_peminjaman']; ?>" name="id">
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Nama Barang</label>
										<div class="input-group">
									<select class="form-control" name="id_barang">
										<?php
									$query = $mysqli->query('SELECT * FROM barang');
									while($result = mysqli_fetch_array($query)) {
										?>
									<option value="<?php echo $result['id_brg'] ?>" <?php echo $result['id_brg'] == $qu['id_brg'] ? 'selected'  : ' ' ?>> <?php echo $result['nama_brg']; ?> </option>
										<?php } ?>
									</select>
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Nama Peminjam</label>
										<div class="input-group">
									<select class="form-control" name="id_user">
									<?php
										$query = $mysqli->query('SELECT * FROM user');
										while($result = mysqli_fetch_array($query)) {
									?>
									<option value="<?php echo $result['id_user'] ?>" <?php echo $result['id_user'] == $qu['id_user'] ? 'selected'  : ' ' ?>> <?php echo $result['nama_lengkap']; ?> </option>
										<?php } ?>
									</select>
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Tanggal Peminjaman</label>
										<div class="input-group">
									<input type="date" value="<?php echo date('Y-m-d', strtotime($qu['tgl_pinjam'])) ?>"  name="tgl_pinjam" class="form-control datepicker" required>
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Status Peminjaman</label>
										<div class="input-group">
									<select name="status" class="form-control">
										<option value="1" <?php echo $qu['status'] == 1 ? 'selected' : ' ' ?>>Sudah Dikembalikan</option>
										<option value="0" <?php echo $qu['status'] == 0 ? 'selected' : ' ' ?>>Belum Dikembalikan</option>
									</select>
										</div>
									</div>
								<div class="col-12">
									<label for="" class="form-label">Keterangan</label>
								<div class="input-group">
									<textarea name="keterangan" type="text" class="form-control border-start-0" id="keterangan" placeholder="Tulis Keterangan" /></textarea>
									</div>
								</div>
									<div class="col-12">
										<button type="submit" class="btn btn-info px-5">Tambah</button>
										<a href="peminjaman.php" class="btn btn-danger px-5">Back</a>
									</div>
								</form>
							</div>
						</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
	
	<?php require_once "../templates/footer.php" ?>