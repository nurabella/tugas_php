<?php
//No 1
for ($i = 0; $i <= 8; $i++){
    for ($a = 0; $a <= $i; $a++){
        echo $a;
    }
    echo "<br>";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
</head>
<body>
<form>
		<table border="1" >
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>
 
		<?php   for ($no = 1, $i=1, $a=10; $i<=10, $a>=1  ; $i++, $a--)  { ?>
 
			<tr>
				<td> <?php echo $i; ?></td>
				<td><?php echo "Nama ke $i"; ?></td>
				<td><?php echo "Kelas $a"; ?></td>
			</tr>
 
		<?php $no++; } ?>
 
		</table>
	</form>
</body>
</html>