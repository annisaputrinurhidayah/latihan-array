<?php
$bil=$_POST['bil'];
$array = array(273, 281, 384, 119, 392, 184, 105, 129, 204, 219, 274, 275, 263);
echo "Array (273, 281, 384, 119, 392, 184, 105, 129, 204, 219, 274, 275, 263) <br>";
for ($i=0; $i <=12 ; $i++) { 
    if ($bil==$array[$i]) {
        $a=1;
        $urutan=$i+1;
    }
}

if ($a==1)
echo "Bilangan yang anda cari $bil ada pada urutan ke-$urutan";
else
echo "Bilangan yang anda cari tidak ada dalam urutan";