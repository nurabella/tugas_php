<?php 
include 'connection.php';
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$nama_penerbit= $_POST['nama_pnerbit'];
$nama_pengarang = $_POST['nama_pengarang'];
$nama = $_POST['nama'];
$qty_stok= $_POST['qty_stok'];
$harga_pinjam= $_POST['harga_pinjam'];



$result = mysqli_query($connection, "INSERT INTO buku, penerbit, pengarang (isbn,judul,tahun,qty_stok,harga_pinjam,nama_penerbit,nama_pengarang)
VALUES('$isbn','$judul', '$tahun', '$qty_stok','$harga_pinjam','$nama_penerbit', '$nama_pengarang')" );

header("Location:buku.php");

 ?>
