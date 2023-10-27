<!DOCTYPE html>
<html>
<head>
	<title>sesi 28</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<style>
    
</style>

<body>
    <nav class="navbar bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Daftar Nilai</a>
        </div>
    </nav>
    <br>
    <table class="table table-bordered" cellspacing="0" align="center" style="width: 700px;">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tanggal lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
		</tr>

        <?php
        $data = file_get_contents("data.json");
        $students = json_decode($data);
        $no = 1;
        
        foreach ($students as $student){
            if($no % 2 == 0){
                $warna='#fff';
            }
            else{
                $warna='#ccc';
            }
        ?>

        <tr bgcolor= "<?php echo $warna ?>">
            <td><?php echo $no;?></td>
            <td>
                <?php 
                    echo $student->nama;
                ?>
            </td>
            <td>
                <?php 
                    echo $student->tanggal_lahir;
                ?>
            </td>
            <td>
                <?php 
                    $lahir = new DateTime($student->tanggal_lahir);
                    $today        =new DateTime();
                    $umur = $today->diff($lahir);
                    echo $umur->y;
                ?>
            </td>
            <td>
                <?php 
                    echo $student->alamat;
                ?>
            </td>
            <td>
                <?php 
                    echo $student->kelas;
                ?>
            </td>
            <td>
                <?php 
                    echo $student->nilai;
                ?>
            </td>
            <td>
                <?php 
                $nilai=$student->nilai;
                    if ($nilai <= 59) {
                        echo "E";
                    } else if ($nilai >= 60 && $nilai <= 69) {
                        echo "D";
                    } else if ($nilai >= 70 && $nilai <= 79) {
                        echo "C";
                    } else if ($nilai >= 80 && $nilai <= 89) {
                        echo "B";
                    } else if ($nilai >= 90 && $nilai <= 100) {
                        echo "A";
                    } 
                ?>
            </td>
            
        </tr>
        <?php $no++;}
        ?>
 
		</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>