<?php

    include "connection.php";

    $query = mysqli_query($connection, "SELECT * FROM anggota;")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> sesi 29</title>
</head>
<style>
h1 {
	color: blueviolet;
}
table{
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:#333333;
}

table th {
    background:#00BFFF;
    color:#DCDCDC;
    font-weight:bold;
    font-size:14px;
}

table th,
table td {
    vertical-align:top;
    padding:5px 10px;
    border:1px solid #696969;
}

table tr {
    background:#F5FFFA;
}

table tr:nth-child(even) {
    background:#F0F8FF;
}



</style>
<body>
    <h1>Data Anggota Perpustakaan</h1>

    <table border="1">
        <tr>
            <td><b>Id</b></td>
            <td><b>Nama</b></td>
            <td><b>Username</b></td>
            <td><b>Password</b></td>
            <td><b>Sex</b></td>
            <td><b>Telpon</b></td>
            <td><b>Alamat</b></td>
            <td><b>Email</b></td>
        </tr>
        <?php while ($data = mysqli_fetch_array($query)) { ?>
         <tr>
            <td> <?php echo $data ['id_anggota']; ?> </td>
            <td> <?php echo $data ['nama']; ?> </td>
            <td> <?php echo $data ['username']; ?> </td>
            <td> <?php echo $data ['password']; ?> </td>
            <td> <?php echo $data ['sex']; ?> </td>
            <td> <?php echo $data ['telp']; ?> </td>
            <td> <?php echo $data ['alamat']; ?> </td>
            <td> <?php echo $data ['email']; ?> </td>
         </tr>
         <?php } ?>
    </table>

</body>
</html>