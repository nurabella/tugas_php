
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

   <section id="about" style="background-color: #fff">
        <div class="container" style="height: auto;">
        <div class="col-6">
         <h4>Tambah Transaksi</h4>
         <form action="proses_add_transaksi.php" method="POST" name="form-input-data">
            <table class="table">
                  <tr>
                    <td>Nama</td>
                    <td><select name="id_anggota">
                        <?php
                        include "../connection.php";
                        $query = mysqli_query($connection, "SELECT * FROM anggota");
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value=$data[id_anggota]> $data[nama] </option>";
                        }
                        ?>
                      </select> </td>
                </tr>
                <tr>
                  <td>Tanggal Pinjam</td>
                  <td><input type="date" name="tgl_pinjam"  class="form-control" required="" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td>
                    <td><input type="date" name="tgl_kembali"  class="form-control" required="" autocomplete="off"></td>
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