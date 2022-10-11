    <?php require_once "../templates/header.php" ?>
	
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
                          <th>NAMA LENGKAP</th>
                          <th>JABATAN</th>
						  <th>KONTAK</th>
                          <th>OPSI</th>
						  <th>EDIT</th>
                          <th>HAPUS</th>
                        </tr>
                     </thead>

                     <?php
                     $query = $mysqli->query("SELECT * FROM user");
                     $id_peminjam=1;
                     while ($lihat = mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $lihat['id_user']; ?></td>
                          <td><?php echo $lihat['nama_lengkap'];?></td>
                          <td><?php echo $lihat['jabatan'];?></td>
						  <td><?php echo $lihat['kontak'];?></td>
                          <td><a href="buku_pinjam.php?id_user=<?php echo $lihat['id_user']; ?>" class="btn btn-light"><i class="lni lni-eye"></i>Lihat Pinjam Barang</a></td>
						  <td><div class="d-flex order-actions"><a href="editpeminjam.php?id_peminjam=<?php echo $lihat['id_user']; ?>"><i class="bx bx-pencil"></i></a></div></td>
						  <td><div class="d-flex order-actions"><a href="hapuspeminjam.php?id=<?php echo $lihat['id_user']; ?>"><i class="bx bx-trash"></i></a></div></td>

                        </tr>
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
	
	<?php require_once "../templates/footer.php" ?>