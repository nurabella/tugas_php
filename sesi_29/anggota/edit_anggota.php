<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <?php
      include "../connection.php";
      $id_anggota= $_GET['id_anggota'];

      $anggotas = mysqli_query($connection, "SELECT * FROM anggota WHERE id_anggota='$id_anggota' ");

      foreach ($anggotas as $anggota){
        $nama = $anggota ['nama'];
        $username = $anggota ['username'];
        $password =$anggota ['password'];
        $sex = $anggota ['sex'];
        $telp = $anggota ['telp'];
        $alamat = $anggota ['alamat'];
        $email = $anggota ['email'];

        }
    ?>
<!--navbar-->
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#9cdbd6;">
        <div class="container">
          <a class="navbar-brand" href="../index.php">My Library</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="anggota.php">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../buku/buku.php">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../transaksi/transaksi.php">Transaksi</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>

    <!--akhir navbar-->
        
<body>

	 <section id="about" style="background-color: #fff">
        <div class="container" style="height: auto;">
        <div class="col-6">
          <h4 class = 'mt-3' style="text-align: center;">EDIT DATA ANGGOTA</h4>
         <form action="proses_edit_anggota.php?id_anggota=<?php echo $id_anggota; ?>" method="POST" name="form-input-data">
              <table class="table">
                  <tr>
                    <td>Nama</td>
                    <td>
                      <input type="text" name="nama" class="form-control" required="" autocomplete="off" value="<?php echo $nama;?>">
                    </td>
                </tr>
                  <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" class="form-control" required="" autocomplete="off"value="<?php echo $username;?>"></td>
                </tr>
                  <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="form-control" required="" autocomplete="off" value="<?php echo $password;?>"></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>

                  <td>
                    <div class="form-check">
                      <?php
                      if($sex == 'L'){
                        echo ' <input class="form-check-input" type="radio" name="sex"  value="L" checked="">';
                      } else {
                        echo ' <input class="form-check-input" type="radio" name="sex"  value="L" >';
                      }
                
                      ?>
                      <label class="form-check-label"> L</label>
                      </div>

                      <div class="form-check">
                      <?php
                      if($sex == 'P'){
                        echo ' <input class="form-check-input" type="radio" name="sex"  value="P" checked="">';
                      } else {
                        echo ' <input class="form-check-input" type="radio" name="sex"  value="P" >';
                      }
                
                      ?>
                      <label class="form-check-label"> P</label>
                      </div>
                  </td>
                </tr>
                <tr>
                    <td>Telpon</td>
                    <td><input type="text" name="telp" class="form-control" required="" autocomplete="off" value="<?php echo $telp;?>"></td>
                </tr>
                  <tr>
                    <td>Alamat</td>
                    <td><textarea class= "form-control" name="alamat" rows="5" required=""> <?php echo $alamat;?></textarea></td>
                </tr>
                  <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" class="form-control" required="" autocomplete="off" value="<?php echo $email;?>"></td>
                </tr>
                  
                  <tr>
                    <td></td>
                    <td><input class="btn btn-primary" type="submit" name="submit" value="edit" onclick="showEditdata('Anda yakin mengedit data ini?')"  ></td>
                </tr>
            </table>
          </form>
        </div>
      </section>
    <!--akhir about-->

    <!--jquery-->

     <script type="text/javascript">
      function showEditdata(edit){
        alert(edit);
      }

    </script>

   <!--akhir jquery-->

</body>

</HTML>
	
	
