    <?php require_once "header.php" ?>
	
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<div class="row">
					<div class="col-12">
						<div class="card">
					<div class="search-bar flex-grow-1">
						<div class="position-relative">
						<h4><p style="text-align:center; margin-top: 15px;" width="580px"><b>DAFTAR BARANG SIKADAL</b></p></h4>
						</div>
					</div>
						</div>
					</div>
				</div>
<?php
//List produk dari database
$alat = $mysqli->query("SELECT * FROM barang") or die(mysqli_error());
$row_alat = mysqli_fetch_array($alat);
$foto = $row_alat['foto'];
?>
				<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
					<div class="col">
						<div class="card">
							<img src="../images/batterai.jpg" class="card-img-top" alt="...">
							<div class="">

							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Batterai Sony NP-F970</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>Stok : <?php echo $row_alat['stok_brg']; ?></strong></p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=1&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="../images/charger.jpg" class="card-img-top" alt="...">
							<div class="">
							
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Charger Canon LC-E6E</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>10</strong> Stok</p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=2&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="../images/canon5d.jpg" class="card-img-top" alt="...">
							<div class="">
							
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Kamera Canon 5D Mark IV</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>6</strong> Stok</p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=3&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="../images/drone.jpg" class="card-img-top" alt="...">
							<div class="">
							
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Drone DJI Mavvic Air 2</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>3</strong> Stok</p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=4&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="../images/nx100.jpg" class="card-img-top" alt="...">
							<div class="">

							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Kamera Sony HXC-NX100</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>27</strong> Stok</p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=5&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="../images/nx200.jpg" class="card-img-top" alt="...">
							<div class="">

							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Kamera Sony HXC-NX200</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>10</strong> Stok</p>

								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=6&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="../images/pmw300.jpg" class="card-img-top" alt="...">
							<div class="">

							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Kamera Sony PMW EX-300</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>6</strong> Stok</p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=7&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="../images/pxw.jpg" class="card-img-top" alt="...">
							<div class="">

							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Kamera Sony PXW - Z280</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>5</strong> Stok</p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=8&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="../images/lampu.jpg" class="card-img-top" alt="...">
							<div class="">

							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Lampu Apature AL-H198C</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>10</strong> Stok</p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=9&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="../images/tripod.jpg" class="card-img-top" alt="...">
							<div class="">

							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Tripod Libec TH-650 EX</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>10</strong> Stok</p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=10&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="../images/switcher.jpg" class="card-img-top" alt="...">
							<div class="">
							</div>
							<div class="card-body">
								<h6 class="card-title cursor-pointer">Switcher Portable</h6>
								<div class="clearfix">
									<p class="mb-0 float-start"><strong>2</strong> Stok</p>
								</div>
								<div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<p><a href="cartfunction.php?act=add&amp;id_product=11&amp;id_pembeli=<?php echo $_SESSION['username']; ?>&amp;ref=view_cart.php" class="btn btn-danger" ><font color="white">Pinjam Barang</font></a></p>
								  </div>	
								</div>
							</div>
						</div>
					</div>
				</div><!--end row-->


			</div>
		</div>
		<!--end page wrapper -->

    <?php require_once "footer.php" ?>