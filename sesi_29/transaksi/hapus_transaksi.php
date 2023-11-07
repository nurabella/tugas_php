<?php
include "../connection.php";

$id_pinjam = $_GET['id_pinjam'];

$result = mysqli_query($connection, "DELETE FROM peminjaman WHERE id_pinjam='$id_pinjam'");

header("Location: transaksi.php");

?>