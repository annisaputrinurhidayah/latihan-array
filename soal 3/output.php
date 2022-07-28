<?php

$n = $_POST["jum"];

for ($i=0; $i < $n ; $i++) { 
    $a=$i+1;
    $nilai[$i] = $_POST["nilai$i"];
    echo "bilangan urutan ke $a adalah ".$nilai[$i]."<br>";

}

// nilai terkecil
$min=$nilai[0];
for ($i=0; $i <=count($nilai)-1 ; $i++) { 
    if ($nilai[$i]<$min) {
        $min=$nilai[$i];
    }
}

// nilai terbesar
$max=$nilai[0];
for ($i=0; $i <=count($nilai)-1 ; $i++) {
    if ($nilai[$i]>$max) {
        $max=$nilai[$i];
    }
}

// jangkauan
$jangkauan=$max-$min;

echo "bilangan terkecil adalah $min <br>";
echo "bilangan terbesar adalah $max <br>";
echo "jangkauan bilangan adalah $jangkauan <br>";