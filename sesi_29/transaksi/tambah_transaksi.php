
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
              <a class="nav-link" href="../buku/buku.php">Buku</a>
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
          <h4 class = 'mt-3' style="text-align: center;">TAMBAH DATA TRANSAKSI</h4>
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
                  <td><input type="date" name="tgl_pinjam" id="name" class="form-control" required="" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td>
                    <td><input type="date" name="tgl_kembali"  class="form-control" required="" autocomplete="off"></td>
                </tr>
                  
                  <tr>
                    <td></td>
                    <td><input class="btn btn-primary" type="submit" name="submit" value="Tambah" id="tambah" disabled="  "></td>
                </tr>
            </table>
            
          </form>
          </div>
        </div>
      </section>
    <!--akhir about-->

    <!--jquery-->

    <script type="text/javascript">
      $(document).ready(function(){

        $("#name"). on("keyup", function  (){
          $("#tambah").prop('disabled', false );
        });
      });
    </script>

   <!--akhir jquery-->
    
</body>
</html>