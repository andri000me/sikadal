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
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Jenis Barang</th>
						  <th>Tanggal Pinjam</th>
                          <th>Foto</th>
                          <th>Status</th>
                        </tr>
                     </thead>

                     <?php
                     $query = mysqli_query($mysqli,"SELECT peminjaman.id_brg, peminjaman.id_user, peminjaman.tgl_pinjam, barang.nama_brg, barang.jenis_brg, barang.foto FROM peminjaman JOIN barang ON peminjaman.id_brg=barang.id_brg JOIN user ON user.id_user=peminjaman.id_user");
                     $id_peminjam=1;
                     while ($lihat = mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $id_peminjam++; ?></td>
                          <td><?php echo $lihat['nama_brg'];?></td>
                          <td><?php echo $lihat['jenis_brg'];?></td>
						  <td><?php echo $lihat['tgl_pinjam'];?></td>
                          <td><img src="../images/<?php echo $lihat['foto'];?>" alt="" width="50px" height="30px"></td>
                          <td style="">
                            <a href="proses_kembali.php?id_user=<?php echo $lihat['id_user']; ?>" class="text btn-danger px-3">Kembalikan Barang <i class="fa fa-refresh"></i></a>
                          </td>


                        </tr>
                        <?php
                        $id_peminjam++;
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