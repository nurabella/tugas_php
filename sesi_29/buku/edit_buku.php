
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <?php
      include "../connection.php";
      $isbn= $_GET['isbn'];

      $books= mysqli_query($connection, "SELECT * FROM buku WHERE isbn='$isbn' ");

      foreach ($books as $book){
        $isbn = $book['isbn'];
        $judul = $book['judul'];
        $tahun = $book['tahun'];
        $id_penerbit = $book['id_penerbit'];
        $id_pengarang = $book['id_pengarang'];
        $id_katalog = $book['id_katalog'];
        $qty_stok= $book['qty_stok'];
        $harga_pinjam= $book['harga_pinjam'];

        }
    ?>
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
         <h4>Tambah Buku</h4>
         <div class="col-6">
         <form action="proses_edit_buku.php?isbn=<?php echo $isbn; ?>" method="POST" name="form-input-data">
             <table class="table">
                  <tr>
                    <td>ISBN</td>
                    <td><input type="text" name="isbn" class="form-control" required="" autocomplete="off" value="<?php echo $isbn;?>"></td>
                </tr> 
                  <tr>
                    <td>Judul Buku</td>
                    <td><input type="text" name="judul" class="form-control" required="" autocomplete="off" value="<?php echo $judul;?>"> </td>
                </tr>
                  <tr>
                    <td>Tahun Terbit</td>
                    <td><input type="date" name="isbn" class="form-control" required="" autocomplete="off" value="<?php echo $tahun;?>"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>
                      <select name="id_penerbit">
                        <?php
                        include "../connection.php";
                        $query = mysqli_query($connection, "SELECT * FROM penerbit");
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value=$data[id_penerbit]> $data[nama_penerbit] </option>";
                        }
                        ?>
                      </select>
                    </td>
                </tr>
                  <tr>
                    <td>Nama Pengarang</td>
                    <td>
                      <select name="id_pengarang">
                        <?php
                        include "../connection.php";
                        $query = mysqli_query($connection, "SELECT * FROM pengarang");
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value=$data[id_pengarang]> $data[nama_pengarang] </option>";
                        }
                        ?>
                      </select>
                    </td>
                </tr>
                  <tr>
                    <td>Katalog</td>
                    <td>
                      <select name="id_katalog">
                        <?php
                        include "../connection.php";
                        $query = mysqli_query($connection, "SELECT * FROM katalog");
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value=$data[id_katalog]> $data[nama] </option>";
                        }
                        ?>
                      </select>
                    </td>
                </tr>
                  <tr>
                    <td>Stok</td>
                    <td><td><input type="text" name="qty_stok" class="form-control" required="" autocomplete="off" value="<?php echo $qty_stok;?>"></td></td>
                </tr>
                  <tr>
                    <td>Harga Pinjam</td>
                    <td><input type="text" name="harga_pinjam"  class="form-control" required="" autocomplete="off"></td>
                </tr>

                  <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Tambah"></td>
                </tr>
                   
            </table>
          </form>
        </div>
        </div>
      </section>
    <!--akhir about-->
    
</body>
</html>