<?php 
include 'connection.php';

$id_anggota = $_GET['id_anggota'];
$nama = $_POST['nama'];
$username =  $_POST['username'];
$password =  $_POST['password'];
$sex =  $_POST['sex'];
$telp =  $_POST['telp'];
$alamat =  $_POST['alamat'];
$email = $_POST['email'];

mysqli_query($connection, "UPDATE anggota SET nama='$nama', username='$username', 
password='$password', sex='$sex', telp='$telp', alamat='$alamat', email='$email' WHERE id_anggota ='$id_anggota' ");

header("Location: anggota.php");
?>