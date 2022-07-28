<?php
$barang = $_POST['barang'];
echo "<h1> Market</h1>";
include "daftarharga.php";

echo "Masukkan Kode Barang dan Jumlahnya : <br><br>";
echo "<table>";
echo "<form action='output.php' method='post'>";

    for ($a=0; $a < $barang ; $a++) { 
        $i=$a+1;
        echo "<tr>
                <td> Kode Barang ke -$i</td>
                <td><input type='text' name='kode$a'></td>";
        echo "<td> Jumlah </td>
                <td><input type='text' name='jumlah$a'></td>
                </tr>";
    }
echo "</table>
        <input type='hidden' name='kode' id='' value='$barang'>";

echo "<input type='submit' name='submit' id='' value='Submit'>
        </form>";