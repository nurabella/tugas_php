<?php
//No 1
for($a=1; $a < 10; $a++)
    if ($a % 2 == 0){
        echo "$a adalah bilangan genap<br>";
    } else {
        echo "$a adalah bilangan ganjil<br>";
    }

//No 2
for($a=2000; $a <= 2023 ; $a++)
    if ($a % 4 == 0){
        echo "$a adalah tahun kabisat<br>";
    } else {
        echo "$a bukan tahun kabisat<br>";
    }

//No 3
 for ($i=9; $i>=1; $i--){
    for($a=1; $a<=$i; $a++){
        echo $a;
    }
    echo "<br>";
 }
 ?>
