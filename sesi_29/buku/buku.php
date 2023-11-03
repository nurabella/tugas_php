<?php

    include "../connection.php";

    $query = mysqli_query($connection, "SELECT * FROM Buku JOIN penerbit ON penerbit.id_penerbit=buku.id_penerbit JOIN katalog ON katalog.id_katalog=buku.id_katalog JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang;")
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
          <a class="navbar-brand" href="../index.php">My Library</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../anggota/anggota.php">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buku.php">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../transaksi/transaksi.php">Transaksi</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>

    <!--akhir navbar-->

   <section id="about" style="background-color: #fff">
        <div class="container" style="height: auto;">
         <h4>Daftar Buku</h4>
           <a class='btn btn-primary mb-3' href='tambah_buku.php'>Tambah Buku</a>
            <table class="table table-bordered">
                <tr>
                    <td><b>No</b></td>
                    <td><b>ISBN</b></td>
                    <td><b>Judul Buku</b></td>
                    <td><b>Tahun Terbit</b></td>
                    <td><b>Nama Penerbit</b></td>
                    <td><b>Nama Pengarang</b></td>
                    <td><b>Katalog</b></td>
                    <td><b>Stok</b></td>
                    <td><b>Harga Pinjam</b></td>
                     <td><b>Aksi</b></td>

                </tr>
                <?php 
                $no = 1;
                while ($data = mysqli_fetch_array($query)) { ?>
                 <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data ['isbn']; ?> </td>
                    <td> <?php echo $data ['judul']; ?> </td>
                    <td> <?php echo $data ['tahun']; ?> </td>
                    <td> <?php echo $data ['nama_penerbit']; ?> </td>
                    <td> <?php echo $data ['nama_pengarang']; ?> </td>
                    <td> <?php echo $data ['nama']; ?> </td>
                    <td> <?php echo $data ['qty_stok']; ?> </td>
                    <td> <?php echo $data ['harga_pinjam']; ?> </td>
                    <td>
                      <a class='btn btn-success' href='edit_buku.php?id_anggota=$data[id_anggota]'>Edit</a>
                      <a class='btn btn-danger' href='hapus_buku.php?id_anggota=$data[id_anggota]'>Hapus</a>
                    </td>
                 </tr>
                <?php $no++; } ?>
            </table>
        </div>
      </section>
    <!--akhir about-->
     <!--footer-->

    <footer class="text-center pb-2 pt-4" style="background-color: #9cdbd6; ">
      <p>Created by <a href="https//instagram.com" class="fw-bold" >Nura Bela</a></p>
    </footer>

    <!--akhir footer -->
</body>
</html>