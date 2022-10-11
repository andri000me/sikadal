    <?php require_once "../templates/header.php" ?>
	
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">INPUT BARANG</div>
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
							<button type="button" class="btn btn-light"><a href="barang.php">List Barang</a></button>
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
									<h5 class="mb-0 text-white">INPUT DATA BARANG</h5>
								</div>
								<hr>
								<form class="row g-3" action="prosestambahbrg.php" method="post">
									<div class="col-12">
										<label for="" class="form-label">KODE BARANG</label>
									<?php
										$query = mysqli_query($mysqli, "SELECT max(kode_brg) as kodeTerbesar FROM barang");
									$data = mysqli_fetch_array($query);
										$kodeBarang = $data['kodeTerbesar'];
									$urutan = (int) substr($kodeBarang, 3, 3);
										$urutan++;
									$huruf = "BRG";
										$kodeBarang = $huruf . sprintf("%03s", $urutan);
									?>
										<div class="input-group">
											<input name="kode_brg" type="text" class="form-control border-start-0" required="required" value="<?php echo $kodeBarang ?>" readonly>
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Nama Barang</label>
										<div class="input-group">
											<input name="nama_brg" type="text" class="form-control border-start-0" id="nama_brg" placeholder="Nama Barang" />
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Jenis Barang</label>
										<div class="input-group">
											<input name="jenis_brg" type="text" class="form-control border-start-0" id="jenis_brg" placeholder="Jenis Barang" />
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Stok Barang</label>
										<div class="input-group">
											<input name="stok_brg" type="text" class="form-control border-start-0" id="stok_brg" placeholder="Stok Barang" />
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Foto Barang</label>
										<div class="input-group">
											<input name="foto" type="file" class="form-control border-start-0" id="foto" placeholder="Foto Barang" />
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-info px-5">Tambah</button>
										<a href="barang.php" class="btn btn-danger px-5">Back</a>
									</div>
								</form>
							</div>
						</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
	
	<?php require_once "../templates/footer.php" ?>