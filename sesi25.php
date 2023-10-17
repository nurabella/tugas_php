<?php

//No 1 membuat output bilangan ganjil dan genap
$number = 8;
if ($number % 2 == 0){ 
    echo "$number Adalah Bilangan Genap <br>"; 
}else {
    echo "$number Adalah Bilangan Ganjil <br>";
}

//No 2 membuat output tahun kabisat

$tahun = 2024;
if ($tahun % 4 == 0){
    echo "$tahun Adalah tahun kabisat <br>";
} else {
    echo "$tahun bukan tahun kabisat <br>";
}

//No 3 Membuat grade nilai

$nilai = 90;

if(($nilai >= 90) && ($nilai <= 100 ))
{
	echo "Nilai = grade A";
}
elseif(($nilai >= 80) && ($nilai < 90))
{
	echo "Nilai = grade B";
}
elseif(($nilai >= 70) && ($nilai < 80))
{
	echo "Nilai = grade C";
}
elseif(($nilai >= 60) && ($nilai < 70))
{
	echo "Nilai = grade D";
}
elseif(($nilai >= 0 ) && ($nilai < 60))
{
	echo "Nilai = grade E";
}

?>

