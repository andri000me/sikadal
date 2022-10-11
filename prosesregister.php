<?php
session_start();
    include'config/koneksi.php';
	
$nama_lengkap	= $_POST ['nama_lengkap'];
$jabatan 		= $_POST ['jabatan'];	
$kontak 		= $_POST ['kontak'];
$username 		= $_POST ['username'];
$password 		= $_POST ['password'];


        $query = mysqli_query($mysqli,"INSERT INTO user (nama_lengkap, jabatan, kontak, username, password) values('$nama_lengkap', '$jabatan', '$kontak', '$username', '$password')");

if($query){
	
  	header('Location:index.php'); 

} else {
    echo "gagal menambah data";
  }
    
?>
