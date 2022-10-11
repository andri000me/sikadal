<?php
session_start();
if(!isset($_SESSION['level'])) {
   header('location:index.php');
} else {
   $username = $_SESSION['username'];
   require_once 'config/koneksi.php';

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Dashtrans - Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme2">
    <?php
        date_default_timezone_set("Asia/jakarta");
    ?>
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-lock-screen d-flex align-items-center justify-content-center">
			<div class="card shadow-none bg-transparent">
				<div class="card-body p-md-5 text-center">
				<div action="proseslogin.php" method="post">
					<h2 class="text-white"><p id="jam" style="font-size:24"></p></h2>
					<h5 class="text-white"><?php echo $today = date("j F, Y");  ?></h5>
					<div class="">
						<img src="images/tvrnow.png" class="mt-3" width="340" alt="" />
					</div>
					<p name="username" type="text" class="mt-2 text-white"><?php echo $_SESSION['username'] ?></p>
					<div class="mb-3 mt-3">
						<input name="password" type="password" class="form-control" placeholder="Password" />
					</div>
					<div class="d-grid">
						<button type="submit" class="btn btn-light">Login</button>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>
    <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
</html>