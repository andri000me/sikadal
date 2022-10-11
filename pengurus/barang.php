    <?php require_once "../templates/header.php" ?>

			<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3"><a href="index.php">DATA BARANG</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="barang.php">List Barang</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light"><a href="tambahbrg.php">Tambah Barang</a></button>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase"> </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
                     <thead class="table-danger">
                        <tr>
                          <th>NO</th>
						  <th>KODE BARANG</th>
                          <th>NAMA BARANG</th>
                          <th>JENIS BARANG</th>
                          <th>STOK</th>
                          <th>FOTO</th>
                          <th>EDIT</th>
                        </tr>
                     </thead>

                <?php
                     $query = $mysqli->query("SELECT * FROM barang ");
                     $id_brg=1;
                     while ($lihat=mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $id_brg++; ?></td>
						  <td><?php echo $lihat['kode_brg']; ?></td>
                          <td><?php echo $lihat['nama_brg']; ?></td>
                          <td><?php echo $lihat['jenis_brg'];?></td>
                          <td><?php echo $lihat['stok_brg']; ?></td>
                          <td><img src="../images/<?php echo $lihat['foto']; ?>" alt="" width="30" height="30"></td>
						  <td><div class="d-flex order-actions"><a href="editbrg.php?id_brg=<?php echo $lihat['id_brg']; ?>"><i class="bx bx-pencil"></i></a></div></td>
                        </tr>
                        <?php

                        } ?>

                      </tbody>
					</table>
						</div>
					</div>
				</div>
			<!--end page wrapper -->
	
	<?php require_once "../templates/footer.php" ?>