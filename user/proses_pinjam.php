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
				<h3>Proses Pendataan Peminjaman</h3>
					<form action="proses_transaksi.php?id_user=<?php echo $_SESSION['username']; ?>" method="post">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" name="nama" class="form-control" disabled value="<?php echo $_SESSION['username']; ?>">
							<input type="hidden" name="nama" class="form-control" value="<?php echo $_SESSION['username']; ?>">
						</div>
						<?php
							$user = $_SESSION['username'];
							$query = $mysqli->query("SELECT * FROM user WHERE id_user = '$user'");
							while ($data = mysqli_fetch_assoc($query)) {
						?>
							<input type="hidden" name="id_user" value="<?php echo $data['nama_lengkap']; ?>">
							<label for="">Jabatan</label>
						<div class="form-group">
							<input type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>" disabled class="form-control">
							<input type="hidden" name="jabatan" value="<?php echo $data['jabatan']; ?>" class="form-control">
						</div>
						<?php	}
						?>

						<div class="form-group">
						<?php
						date_default_timezone_set('Asia/Jakarta');
						$date = date('d' . '-' . 'F' . '-' . 'Y');
						 ?>
							<label for="">Tgl Pinjam</label>
							<input type="text" disabled name="tgl_pinjam" class="datepicker form-control" value="<?php echo $date; ?>">
							<input type="hidden" name="tgl_pinjam" class="datepicker form-control" value="<?php echo $date; ?>">

						</div>

						<button type="submit" name="finish" class="btn btn-block btn-primary">Proses</button>
					</div>
				</div>
				</div>
				<div class="col-md-4 ">
					<h3>Barang yang Di Pinjam</h3>
					<?php

							  if (isset($_SESSION['items'])) {
							        foreach ($_SESSION['items'] as $key => $val){
							            $query = $mysqli->query("SELECT * FROM barang WHERE barang.id_brg = '$key'");
							            $rs = mysqli_fetch_array($query);
							  ?>
						<img src="../images/<?php echo $rs['foto']; ?>" class="thumbnail" width="250" height="100" alt="">
						<h3><?php echo $rs['nama_brg']; ?></h3>
						<input type="hidden" name="id_brg" value="<?php echo $val; ?>" class="form-control">
					<?php
					            mysqli_free_result($query);
					        }
					 	 }
					  ?>
				</div>
					</form>
						</div>
					</div>
				</div>
			<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
	
	<?php require_once "footer.php" ?>