    <?php require_once "../templates/header.php" ?>

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">INPUT PEMINJAMAN BARANG</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Input Pinjam Barang</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light"><a href="peminjaman.php">List Peminjaman</a></button>
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
									<h5 class="mb-0 text-white">INPUT PINJAM BARANG</h5>
								</div>
								<hr>
								<form class="row g-3" action="prosestambahpeminjaman.php" method="post">
									<div class="col-12">
										<label for="" class="form-label">KODE PINJAM</label>
									<?php
										$query = mysqli_query($mysqli, "SELECT max(kode_pinjam) as kodeTerbesar FROM peminjaman");
									$data = mysqli_fetch_array($query);
										$kodePinjam = $data['kodeTerbesar'];
									$urutan = (int) substr($kodePinjam, 5, 5);
										$urutan++;
									$huruf = "KPJ";
										$kodePinjam = $huruf . sprintf("%05s", $urutan);
									?>
										<div class="input-group">
											<input name="kode_pinjam" type="text" class="form-control border-start-0" required="required" value="<?php echo $kodePinjam ?>" readonly>
										</div>
									</div>
									<div class="col-12">
										<label class="form-label">Pilih Barang</label>
									<select name="nama_barang" class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
									<?php
										$sql = "select * from barang";
										$query = $mysqli->query($sql);
										while ($data = mysqli_fetch_array($query)) {
										?>
									<option value="<?php echo $data['id_brg'] ?>"><?php echo $data['nama_brg'] ?></option>
									<?php } ?>
									</select>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Nama Peminjam</label>
									<select name="nama_peminjam" class="form-control">
									<option value="" selected disabled>- Nama Peminjam -</option>
									<?php
										$sql = "select * from user";
										$query = $mysqli->query($sql);
										while ($data = mysqli_fetch_array($query)) {
										?>
									<option value="<?php echo $data['id_user'] ?>"><?php echo $data['nama_lengkap'] ?></option>
									<?php } ?>
									</select>
										</div>
									<div class="col-12">
										<label for="" class="form-label">Tanggal Pinjam</label>
										<div class="input-group">
											<input type="text" class="form-control" readonly name="tgl_pinjam" required value="<?php echo $today = date("j F, Y");  ?>">
										</div>
									</div>
									<div class="col-12">
										<label class="form-label">Keperluan</label>
										<select name="keperluan" class="single-select">
											<option>-Pilih Keperluan-</option>
											<option value="SUDAP">SUDAP</option>
											<option value="PROGRAM">PROGRAM</option>
											<option value="PODCAST">PODCAST</option>
											<option value="DINAS LUAR">DINAS LUAR</option>
											<option value="LIPUTAN">LIPUTAN</option>
											<option value="KABAR NUSANTARA">KABAR NUSANTARA</option>
											<option value="TVR DAYS">TVR DAYS</option>
											<option value="FORUM LEGISLASI">FORUM LEGISLASI</option>
											<option value="DIALEKTIKA">DIALEKTIKA</option>
											<option value="PARIPURNA">PARIPURNA</option>
										</select>
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