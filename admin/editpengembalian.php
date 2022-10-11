    <?php require_once "../templates/header.php" ?>
	
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">EDIT DATA PENGEMBALIAN</div>
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
						<div class="btn-group">
							<button type="button" class="btn btn-light"><a href="pengembalian.php">pengembalian</a></button>
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
									<h5 class="mb-0 text-white">EDIT DATA PENGEMBALIAN</h5>
								</div>
								<hr>
								<?php
								$id = $_GET['id_pengembalian'];
								$query = $mysqli->query("SELECT pengembalian.*,
									barang.id_brg,
									barang.nama_brg,
									peminjaman.id_peminjaman,
									peminjaman.tgl_pinjam,
									peminjaman.keperluan,
									peminjaman.status,
									pengembalian.keterangan,
									user.id_user,
									user.nama_lengkap
									FROM pengembalian JOIN barang
									ON pengembalian.id_brg=barang.id_brg JOIN user
									ON pengembalian.id_user=user.id_user JOIN peminjaman
									ON peminjaman.id_peminjaman=pengembalian.id_peminjaman
									WHERE pengembalian.id='$id'");
								$qu = mysqli_fetch_array($query);
								?>
								<form class="row g-3" action="proseseditpengembalian.php" method="post">
									<div class="col-12">
										<label for="" class="form-label">ID</label>
										<div class="input-group">
											<input type="text" disable value="<?php echo $qu['id_peminjaman'] ?>" name="id" class="form-control" placeholder="" disabled>
											<input type="hidden" value="<?= $qu['id_peminjaman']; ?>" name="id">
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Nama Barang</label>
										<div class="input-group">
											<input type="text" name="nama_brg" readonly="" class="form-control" value="<?= $qu['nama_brg'] ?>">
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Nama Peminjam</label>
										<div class="input-group">
											<input type="text" name="nama" class="form-control" value="<?= $qu['nama_lengkap'] ?>" readonly>
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Tanggal Peminjaman</label>
										<div class="input-group">
											<input type="date" value="<?php echo date('Y-m-d', strtotime($qu['tgl_pinjam'])) ?>"  name="tgl_pinjam" class="form-control datepicker" required readonly>
										</div>
									</div>
									<div class="col-12">
										<label for="" class="form-label">Tanggal Kembali</label>
										<div class="input-group">
											<input type="date" name="tgl_kembali" class="form-control" value="<?= date('Y-m-d', strtotime($qu['tgl_kembali'])) ?>">
										</div>
									</div>
								<div class="col-12">
									<label for="" class="form-label">Keterangan</label>
								<div class="input-group">
									<input type="text" name="keterangan" class="form-control" value="<?= $qu['keterangan'] ?>">
									</div>
								</div>
									<div class="col-12">
										<button type="submit" class="btn btn-info px-5">Tambah</button>
										<a href="pengembalian.php" class="btn btn-danger px-5">Back</a>
									</div>
								</form>
							</div>
						</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
	
    <?php require_once "../templates/footer.php" ?>