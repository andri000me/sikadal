<?php
    include'../config/koneksi.php';
$kode_pinjam 	= $_POST ['kode_pinjam'];
$id_brg 		= $_POST ['nama_barang'];
$id_peminjam 	= $_POST ['nama_peminjam'];
$tgl_pinjam 	= $_POST ['tgl_pinjam'];
$keperluan 		= $_POST ['keperluan'];
$status 		= $_POST ['status'];

        $query = $mysqli->query ("INSERT INTO peminjaman( kode_pinjam, id_brg, id_user, tgl_pinjam, keperluan, status) values ('$kode_pinjam', '$id_brg', '$id_peminjam','$tgl_pinjam','$keperluan','$status')");

        if ($query) {
    header("location:peminjaman.php");
} else {
    echo "gagal menambah data";
  }

?>
