    <?php require_once "../templates/header.php" ?>
	
			<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">TAMBAH DATA USER</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Input User</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light"><a href="peminjam.php">List User</a></button>
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
									<h5 class="mb-0 text-white">INPUT DATA USER</h5>
								</div>
								<hr>
								<form class="row g-3" action="prosestambahpeminjam.php" method="post">
									<div class="col-12">
										<label for="" class="form-label">NAMA LENGKAP</label>
										<div class="input-group">
											<input name="nama_lengkap" type="text" class="form-control border-start-0" id="nama_lengkap" placeholder="Nama Lengkap" />
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">JABATAN</label>
										<div class="input-group">
											<input name="jabatan" type="text" class="form-control border-start-0" id="jabatan" placeholder="Jabatan" />
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">KONTAK</label>
										<div class="input-group">
											<input name="kontak" type="text" class="form-control border-start-0" id="kontak" placeholder="Kontak" />
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">USERNAME</label>
										<div class="input-group">
											<input name="username" type="text" class="form-control border-start-0" id="username" placeholder="Username" />
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">PASSWORD</label>
										<div class="input-group">
											<input name="password" type="password" class="form-control border-start-0" id="password" placeholder="Password" />
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-info px-5">Tambah</button>
										<a href="peminjam.php" class="btn btn-danger px-5">Back</a>
									</div>
								</form>
							</div>
						</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->	
	
    <?php require_once "../templates/footer.php" ?>