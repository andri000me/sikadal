<?php
include "../config/koneksi.php";
$id = $_POST['id'];
$id_brg = $_POST['id_barang'];
$id_user = $_POST['id_user'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$status = $_POST['status'];


$ganti = "update peminjaman set id_brg='$id_brg', id_user='$id_user', tgl_pinjam='$tgl_pinjam', status='$status' where id_peminjaman='$id'";

if ($status == 1) {
	$tgl_kembali = date('Y-m-d');
	$keterangan = $_POST['keterangan'];
	$insert = "INSERT INTO pengembalian(id_brg, id_peminjaman, id_user, tgl_kembali, keterangan) values('$id_brg', '$id', '$id_user', '$tgl_kembali', '$keterangan')";
	$mysqli->query($insert) or die('gagal menambah data pengembalian');
}

$update = $mysqli->query($ganti);

if($update) {
	header("location:peminjaman.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>