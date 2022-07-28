<?php

$bil = $_POST['bilangan'];

echo "<table>";
echo "<form method='post' action='output.php'>";

for ($i = 0; $i < $bil; $i++)  
{ 
$a=$i+1;
echo "<tr>
    <td> Bil ke-$a </td> 
    <td> <input type='text' name='nilai$i' /> </td>
    </tr>";
}

echo "<table>
<input type='hidden' name='jum' value='$bil' />";

echo "<input type='submit' name='submit' value='Submit' />
</form>";

?>
