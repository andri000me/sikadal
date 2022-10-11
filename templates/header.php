<?php
session_start();
if(!isset($_SESSION['level'])) {
   header('location:../index.php');
} else {
   $username = $_SESSION['username'];
   require_once '../config/koneksi.php';

}
?>
<?php require_once "../config/koneksi.php" ?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="../images/icon.png" type="image/png" />
	<!--plugins-->
	<link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="../assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../assets/css/pace.min.css" rel="stylesheet" />
	<script src="../assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/app.css" rel="stylesheet">
	<link href="../assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="../assets/css/dark-theme.css" />
	<link rel="stylesheet" href="../assets/css/semi-dark.css" />
	<link rel="stylesheet" href="../assets/css/header-colors.css" />
	<title>SIKADAL - SISTEM APLIKASI DATA ALAT LIPUTAN</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="../images/tvr.png" width="65" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">SIKADAL</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="index.php">
						<div class="parent-icon"><i class='bx bx-home-smile'></i>
						</div>
						<div class="menu-title">BERANDA</div>
					</a>
				</li>
				<li>
					<a href="barang.php">
						<div class="parent-icon"><i class="bx bx-package"></i>
						</div>
						<div class="menu-title">DATA BARANG</div>
					</a>
				</li>
				<li>
					<a href="tambahbrg.php">
						<div class="parent-icon"><i class='bx bx-upload'></i>
						</div>
						<div class="menu-title">INPUT BARANG</div>
					</a>
				</li>
				<li>
					<a href="peminjaman.php">
						<div class="parent-icon"><i class='bx bx-spreadsheet'></i>
						</div>
						<div class="menu-title">DATA PEMINJAMAN</div>
					</a>
				</li>
				<li>
					<a href="tambahpeminjaman.php">
						<div class="parent-icon"><i class='bx bx-add-to-queue'></i>
						</div>
						<div class="menu-title">INPUT PINJAM</div>
					</a>
				</li>
				<li>
					<a href="pengembalian.php">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">DATA PENGEMBALIAN</div>
					</a>
				</li>
				<li>
					<a href="buku_pinjam.php">
						<div class="parent-icon"> <i class="bx bx-book"></i>
						</div>
						<div class="menu-title">BUKU PINJAM</div>
					</a>
				</li>
				<li class="menu-label">Menu User</li>
				<li>
					<a href="peminjam.php">
						<div class="parent-icon"><i class='bx bx-user-circle'></i>
						</div>
						<div class="menu-title">DATA USER</div>
					</a>
				</li>
				<li>
					<a href="tambahpeminjam.php">
						<div class="parent-icon"><i class="bx bx-user-plus"></i>
						</div>
						<div class="menu-title">TAMBAH USER</div>
					</a>
				</li>
				<li>
					<a href="../logout.php">
						<div class="parent-icon"><i class="bx bx-log-out"></i>
						</div>
						<div class="menu-title">LOGOUT</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative">
						<h1><p style="text-align:center; margin-top: 15px;" width="580px"><b><span style="color:#B02825;">SI</span>STEM &nbsp; APLI<span style="color:#B02825;">KA</span>SI &nbsp; <span style="color:#B02825;">D</span>ATA &nbsp; <span style="color:#B02825;">A</span>LAT &nbsp; <span style="color:#B02825;">L</span>IPUTAN</b></p></h1>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
									</a>
									<div class="header-notifications-list">
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<div class="header-message-list">
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="../images/icon.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
							<?php $query = mysqli_query($mysqli,"SELECT * FROM user");?>
							<?php $data = mysqli_fetch_array($query); ?>
								<p class="user-name mb-0"><?php echo $_SESSION['username']; ?></p>
								<p class="designattion mb-0"><?php echo $_SESSION['level']; ?></p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="../logout.php"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->