<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="images/icon.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>SIKADAL - SISTEM APLIKASI DATA ALAT LIPUTAN</title>
</head>

<body class="bg-theme bg-theme2">

	<!--Start Pesan-->
	
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<div style='text-align:center;padding:5px;margin-bottom:10pt;font-size:1.2em;color:#f00;'>Login gagal! username dan password salah!</div>";
		}else if($_GET['pesan'] == "logout"){
			echo "<div style='text-align:center;padding:5px;margin-bottom:10pt;font-size:1.2em;color:#f00;'>Anda telah berhasil logout</div>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<div style='text-align:center;padding:5px;margin-bottom:10pt;font-size:1.2em;color:#f00;'>Anda harus login untuk mengakses halaman admin</div>";
		}
	}
	?>
	
	<!--End Pesan-->
	
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">

						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<img src="images/tvr2.png" width="280" alt="" />
										<h5><p style="text-align:center; margin-top: 15px;" width="580px"><b><span style="color:#B02825;">SI</span>STEM &nbsp; APLI<span style="color:#B02825;">KA</span>SI &nbsp; <span style="color:#B02825;">D</span>ATA &nbsp; <span style="color:#B02825;">A</span>LAT &nbsp; <span style="color:#B02825;">L</span>IPUTAN</b></p></h5>
									</div>
									<div class="login-separater text-center mb-4"> <span>SELAMAT  DATANG</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3" action="proseslogin.php" method="post">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Username</label>
												<input name="username" type="text" class="form-control" id="inputEmailAddress" placeholder="Username">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input name="password" type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-danger"><i class="bx bxs-lock-open"></i>MASUK</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>