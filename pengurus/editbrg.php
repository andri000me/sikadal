    <?php require_once "../templates/header.php" ?>
	
			<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">EDIT DATA BARANG</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Barang</li>
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
									<h5 class="mb-0 text-white">EDIT DATA BARANG</h5>
								</div>
								<hr>
								<form class="row g-3" action="proseseditbrg.php" method="post">
									<div class="col-12">
										<label for="" class="form-label">ID</label>
									<?php
										$id_brg = $_GET['id_brg'];
										$query = $mysqli->query("SELECT * FROM barang where id_brg='$id_brg'");
										while ($qu = mysqli_fetch_array($query)){
									?>
									<div class="input-group">
										<input type="text" disable value="<?php echo $qu['id_brg'] ?>" name="id_brg" class="form-control" placeholder="" disabled>
										<input type="hidden" value="<?= $qu['id_brg']; ?>" name="id_brg">
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Nama Barang</label>
										<div class="input-group">
									<input type="text"  value="<?php echo$qu['nama_brg'] ?>" name="nama_brg" class="form-control" placeholder="" required>
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Jenis Barang</label>
										<div class="input-group">
									<input type="text"  value="<?php echo$qu['jenis_brg'] ?>" name="jenis_brg" class="form-control" placeholder="" required>
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Stok Barang</label>
										<div class="input-group">
									<input type="text"  value="<?php echo$qu['stok_brg'] ?>" name="stok_brg" class="form-control" placeholder="" required>
										</div>
									</div>
									<?php
										}
									?>
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