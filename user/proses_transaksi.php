    <?php require_once "header.php" ?>
<!--start: Wrapper-->
		<div class="page-wrapper">
			<div class="page-content">
			<!-- start: Table -->
                 <div class="table-responsive">
                 <div class="title"><h3>Peminjaman Selesai</h3></div>
                 <div class="hero-unit"><h3>Selamat Anda telah berhasil checkout</h3></div>
                 <div class="hero-unit">
    <?php
			if(isset($_POST['finish']))	{
				echo '<h4>Terima kasih Anda sudah meminjam alat di Aplikasi SIKADAL.</h4>';
				echo '<p>Nama  : '.$_POST['nama'].'<br>';
				echo '<p>Jabatan : '.$_POST['jabatan'].'<br>';
				echo '<p>Tanggal Pinjam : '.$_POST['tgl_pinjam'].'<br>';
				$nama = $_POST['nama'];
				$jabatan = $_POST['jabatan'];
				$tgl = $_POST['tgl_pinjam'];

				$item = $_SESSION['items'];
				$id_user = $_SESSION['username'];
				// print_r($id_anggota);
				// die();
				foreach ($item as $key => $value) {
					// echo $value;
					// echo "INSERT INTO peminjaman(id_brg, id_user, tgl_pinjam) VALUES (
					// 						'$key',
					// 						'$id_user',
					// 						'$tgl'
					// 						)" . '<br>';

					$d = $mysqli->query("INSERT INTO peminjaman(id_brg, id_user, tgl_pinjam) VALUES (  			 '$key',
											'$id_user',
											'$tgl'
											)") or die(mysqli_error());
				}

			}
				session_destroy();
				echo '<a href="javascript:window.print()"><h3>Cetak</h3></a></font>';
				echo "<a href='logout.php'>Logout</a>";

	?>

                   </div>

			<!-- end: Table -->

		</div>
		<!-- end: Container -->

	</div>
	<!-- end: Wrapper  -->
    <?php require_once "footer.php" ?>