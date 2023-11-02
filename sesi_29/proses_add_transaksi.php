<?php 
include 'connection.php';

$id_anggota= $_POST['id_anggota'];
$tgl_pinjam= $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];

$result = mysqli_query($connection, "INSERT INTO peminjaman (id_anggota, tgl_pinjam,tgl_kembali) VALUES ('$id_anggota' , '$tgl_pinjam', '$tgl_kembali')" );

header("Location:transaksi.php");

 ?>
