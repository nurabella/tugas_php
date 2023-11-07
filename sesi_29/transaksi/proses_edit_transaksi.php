<?php 
include "../connection.php";

$id_pinjam = $_GET['id_pinjam'];
$id_anggota= $_POST['id_anggota'];
$tgl_pinjam= $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];

mysqli_query($connection, "UPDATE peminjaman SET id_pinjam='$id_pinjam', id_anggota='$id_anggota', 
tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali' WHERE id_pinjam ='$id_pinjam'");

header("Location: transaksi.php");
?>	   