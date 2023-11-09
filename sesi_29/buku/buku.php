<?php

    include "../connection.php";

    $query = mysqli_query($connection, "SELECT * FROM buku JOIN penerbit ON penerbit.id_penerbit=buku.id_penerbit JOIN katalog ON katalog.id_katalog=buku.id_katalog JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang;")
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
      
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

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
            <h4 class = 'mt-3'  style="text-align: center;">DAFTAR BUKU</h4>
           <a class='btn btn-primary mb-3' href='tambah_buku.php'>Tambah Buku</a>
            <table id="data" class="display">
              <thead>
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
              </thead>
                <?php 
                $no = 1;
                while ($book = mysqli_fetch_array($query)) { ?>
                <tbody>
                 <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $book ['isbn']; ?> </td>
                    <td> <?php echo $book ['judul']; ?> </td>
                    <td> <?php echo $book ['tahun']; ?> </td>
                    <td> <?php echo $book ['nama_penerbit']; ?> </td>
                    <td> <?php echo $book ['nama_pengarang']; ?> </td>
                    <td> <?php echo $book ['nama']; ?> </td>
                    <td> <?php echo $book ['qty_stok']; ?> </td>
                    <td> <?php echo $book ['harga_pinjam']; ?> </td>
                    <td>
                    <a class='btn btn-success' href="edit_buku.php?isbn=<?php echo $book ['isbn']; ?>">Edit</a>
                    <a class='btn btn-danger' onclick="return confirm ('hapus data ini?');" href="hapus_buku.php?isbn=<?php echo $book ['isbn']; ?>">Hapus</a>
                    </td>
                 </tr>
                </tbody>
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

     <script type="text/javascript">
            
      $(document).ready(function () {
          $('#data').DataTable();
      } );

    </script>
    
</body>
</html>