<?php

    include "connection.php";

    $query = mysqli_query($connection, "SELECT * FROM anggota JOIN peminjaman ON peminjaman.id_pinjam=anggota.id_anggota JOIN detail_peminjaman ON detail_peminjaman.id_pinjam=peminjaman.id_pinjam JOIN buku ON buku.isbn=detail_peminjaman.isbn;")
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> My Library </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>
     <!--navbar-->
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fcd2f1;">
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

   <section id="about" style="background-color: #fff">
        <div class="container" style="height: auto;">
         <h4>Daftar Transaksi</h4>
            <table class="table table-bordered">
                <tr>
                    <td><b>No</b></td>
                    <td><b>Nama Anggota</b></td>
                    <td><b>Jenis Kelamin</b></td>
                    <td><b>Email</b></td>
                    <td><b>Tanggal Pinjam</b></td>
                    <td><b>Tanggam Kembali</b></td>
                    <td><b>ISBN</b></td>
                    <td><b>Judul Buku</b></td>
                    <td><b>Harga Pinjam</b></td>
                </tr>
                <?php 
                $no = 1;
                while ($data = mysqli_fetch_array($query)) { ?>
                 <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data ['nama']; ?> </td>
                    <td> <?php echo $data ['sex']; ?> </td>
                    <td> <?php echo $data ['email']; ?> </td>
                    <td> <?php echo $data ['tgl_pinjam']; ?> </td>
                    <td> <?php echo $data ['tgl_kembali']; ?> </td>
                    <td> <?php echo $data ['isbn']; ?> </td>
                    <td> <?php echo $data ['judul']; ?> </td>
                    <td> <?php echo $data ['harga_pinjam']; ?> </td>
                 </tr>
                 <?php $no++; } ?>
            </table>
        </div>
      </section>
    <!--akhir about-->
     <!--footer-->

    <footer class="text-center pb-2 pt-4" style="background-color: #fcd2f1; ">
      <p>Created by <a href="https//instagram.com" class="fw-bold" >Nura Bela</a></p>
    </footer>

    <!--akhir footer -->
</body>
</html>