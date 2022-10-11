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
				<h3>Keranjang Peminjaman</h3>
                <form action="index.php" method="post" id="cart">
                    <a href="proses_pinjam.php?id_user=<?php echo $_SESSION['username']; ?>" class="btn btn-primary pull-right">Proses Pinjam</a><br><br>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>KODE BARANG</th>
                          <th>NAMA BARANG</th>
                          <th>FOTO BARANG</th>
                          <th>HAPUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      if (isset($_SESSION['items'])) {
                            foreach ($_SESSION['items'] as $key => $val){
                                $query = $mysqli->query("SELECT barang.kode_brg, barang.nama_brg, barang.foto FROM barang WHERE barang.id_brg = '$key'");
                                $rs = mysqli_fetch_array($query);

                      ?>
                      <tr>
                        <td><?php echo $rs['kode_brg']; ?></td>
                        <td><?php echo $rs['nama_brg']; ?></td>
                        <td><img src="../images/<?php echo $rs['foto']; ?>" width="50" height="50" alt=""></td>
						<td><div class="d-flex order-actions"><a href="cartfunction.php?act=del&amp;id_product=<?php echo $key; ?>&amp;ref=view_cart.php"><i class="bx bx-trash"></i></a></div></td>
                      </tr>
                      <?php
                                mysqli_free_result($query);
                            }
                      }
                      ?>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
						<td><a href="cartfunction.php?act=clear&amp;ref=index.php" class="btn btn-danger"><i class="bx bx-trash"></i>Hapus Semua</a></td>
                      </tr>
                      </tbody>
                    </table>
                    <button type="submit" class="btn btn-warning">Kembali</button>
                  </form>
						</div>
					</div>
				</div>
			<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
	
	<?php require_once "footer.php" ?>