<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <?php
      include 'connection.php';
      $id_anggota= $_GET['id_anggota'];

      $datas = mysqli_query($connection, "SELECT * FROM anggota WHERE id_anggota='$id_anggota' ");

      foreach ($datas as $data){
        $nama = $data ['nama'];
        $username = $data ['username'];
        $password = $data ['password'];
        $sex = $data ['sex'];
        $telp = $data ['telp'];
        $alamat = $data ['alamat'];
        $email = $data ['email'];

        }
    ?>
        
<body>

	 <section id="about" style="background-color: #fff">
        <div class="container" style="height: auto;">
         <h4>Edit Anggota</h4>
         <form action="proses_edit_anggota.php?id_anggota=<?php echo $id_anggota; ?>" method="POST" name="form-input-data">
              <table class="table">
                  <tr>
                    <td>Nama</td>
                    <td>
                      <input type="text" name="nama" value="<?php echo $nama;?>">
                    </td>
                </tr>
                  <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?php echo $username;?>"></td>
                </tr>
                  <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="<?php echo $password;?>"></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td><input type="radio" name="sex" value="<?php echo $sex;?>" > Laki Laki
                      <input type="radio" name="sex" value="<?php echo $sex;?>"> Perempuan
                  </td>
                </tr>
                <tr>
                    <td>Telpon</td>
                    <td><input type="text" name="telp" value="<?php echo $telp;?>"></td>
                </tr>
                  <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
                </tr>
                  <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $email;?>"></td>
                </tr>
                  
                  <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Tambah"></td>
                </tr>
            </table>
            
          </form>
        </div>
      </section>
    <!--akhir about-->

</body>

</HTML>
	
	
