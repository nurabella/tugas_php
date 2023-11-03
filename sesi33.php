<?php
//No 1
$array = array("satu", "dua", "tiga","empat", "lima");

for($a=4; $a>=0; $a--){
    echo "$array[$a] <br>";
}


//No 2
$a = array("apel", "nanas", "mangga","jeruk");

echo  "<br> jumlah data = " .count($a) ;

//No 3

    $aray=array(7,3,4,9);
    $jumlah=array_sum($aray);

    echo "Jumlah = $jumlah <br>";

//No 4
for($a=1;$a<=1;$a++)
    {
        for($b=1;$b<=10;$b++)
        {
        $total=$a*$b;
        echo "<p> $a x $b=$total<br>";
        }
    }

?>