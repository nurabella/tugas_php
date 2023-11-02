<?php

    include "connection.php";

    $query = mysqli_query($connection, "SELECT * FROM anggota;")
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>
     <!--navbar-->
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9cdbd6;">
        <div class="container">
          <a class="navbar-brand" href="index.php">My Library</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="anggota.php">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buku.php">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaksi.php">Transaksi</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
    <!--akhir navbar-->

        <div class="container" style="height: auto;">
         <h4>Data Anggota Perpustakaan</h4>
          <a class='btn btn-primary mb-3' href='tambah_anggota.php'>Tambah Anggota</a>
            <table class="table table-bordered ">
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Nama</b></td>
                    <td><b>Username</b></td>
                    <td><b>Password</b></td>
                    <td><b>Jenis Kelamin</b></td>
                    <td><b>Telpon</b></td>
                    <td><b>Alamat</b></td>
                    <td><b>Email</b></td>
                    <td><b>Aksi</b></td>
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
                    <td>
                      <a class='btn btn-success' href="proses_edit_anggota.php? echo $data ['id_anggota']; ?>">Edit</a>
                      <a class='btn btn-danger' href="proses_delete_anggota.php? echo $data ['id_anggota']; ?>">Hapus</a>
                    </td>
                 </tr>
                 <?php } ?>
            </table>
        </div>
     
    <!--akhir about-->

    <!--footer-->

    <footer class="text-center pb-2 pt-4" style="background-color: #9cdbd6; ">
      <p>Created by <a href="https//instagram.com" class="fw-bold" >Nura Bela</a></p>
    </footer>

    <!--akhir footer -->
</body>
</html>