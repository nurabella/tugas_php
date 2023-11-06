<?php
include "../connection.php";

$isbn = $_GET['isbn'];

$result = mysqli_query($connection, "DELETE FROM buku WHERE isbn='$isbn'");

header("Location: buku.php");

?>