<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 28</title>
</head>
<body>
<form>
		<table border="1" >
			<tr>
				<th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
				<th>Umur</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>Nilai</th>
                <th>Hasil</th>
			</tr>
 
		<?php    
        $data =file_get_contents ("data.json");
        $students = json_decode($data);
    
        foreach ($students as $student)	
        ?>
        
            <tr>
                <td><?php ?></td>
                <td>
                    <?php
                    echo $student->nama. "<br>";
                    ?>
                </td>
                <td>
                    <?php
                    echo $student->tanggal_lahir. "<br>";
                    ?>
                    
                </td>
                <td>
                    <?php
                    echo $student->umur. "<br>";
                    ?>
                    
                </td>
                <td>
                    <?php
                    echo $student->alamat. "<br>";
                    ?>
                    
                </td>
                <td>
                    <?php
                    echo $student->kelas. "<br>";
                    ?>
                    
                </td>
                <td>
                    <?php
                    echo $student->nilai. "<br>";
                    ?>
                    
                </td>
            </tr>
      
		</table>
	
</body>
</html>