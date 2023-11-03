<?php
include "../connection.php";

$id_anggota = $_GET['id_anggota'];

$result = mysqli_query($connection, "DELETE FROM anggota WHERE id_anggota='$id_anggota'");

header("Location: anggota.php");

?>