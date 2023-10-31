<HTML>
<head>
	<title>edit anggota</title>
</head>

<?php

include 'connection.php';
$id_anggota = $GET[id_anggota];


$anggota = mysqli_query($connection, "SELECT * FROM anggota WHERE id_anggota=$id_anggota ");

while ($data = mysqli_fetch_array($anggota)){
	$id_anggota = $data ['id_anggota'];
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
            <table width="25%" border="0">
                  <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
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
                  <td><input type="radio" name="jenis_kelamin" value="<?php echo $sex;?>" > Laki Laki
                      <input type="radio" name="jenis_kelamin" value="<?php echo $sex;?>"> Perempuan
                  </td>
                </tr>
                <tr>
                    <td>Telpon</td>
                    <td><input type="text" name="telpon" value="<?php echo $telp;?>"></td>
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
	
	
