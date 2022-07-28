<?php
$n = $_POST["kode"];
    for ($a=0; $a < $n; $a++) { 
        $kode[$a] = $_POST["kode$a"];
        $jumlah[$a] = $_POST["jumlah$a"];
    }

    $kodebarang=array(1001,1002,1003,1004,1005,1006,1007,1008,1009,1010);

    $barang=array("Sabun Lifeboy", "Permen Blaster", "Pasta Gigi Pepsodent", "Madu Arbain", "Kecap ABC", "Saus Tomat ABC", "Gula Gulaku", "Rinso", "Super Pel", "Permen Tango");

    $harga=array(1500,5600,4560,30000,7250,6700,8900,7100,6450,5600);

    echo "<h1> Market</h1>";
    echo "<h2>Daftar Barang yang Dibeli</h2> <br>";
    echo "<table border='1'>
            <tr style='padding:5px'>
                <td>Kode Barang</td>
                <td>Nama Barang</td>
                <td>Harga Satuan</td>
                <td>Jumlah</td>
            </tr>";

    for ($a=0; $a < $n; $a++) 
    {
        for ($i=0; $i < count($kodebarang)-1; $i++) { 
            if ($kode[$a]==$kodebarang[$i])
            {
                $z=$harga[$i]*$jumlah[$a];
                echo "<tr style='padding:5px'>
                        <td>".$kode[$a]."</td>
                        <td>".$barang[$i]."</td>
                        <td>".$jumlah[$a]."</td>
                        <td>Rp.".$z."</td>
                    </tr>";
                $y=$y+$z;
            }
        }
    }

    echo "<tr>
            <td colspan=3>Total Harga</td>
            <td>Rp.".$y."</td>
        </tr>";
        echo "</table>";