<?php
$nama_depan = "Reza";
$nama_belakang = "Fahrezi";

echo "<table>";
for ($i = 1; $i <= 100; $i++) {
    echo "<tr>";
    if ($i % 3 == 0 && $i % 5 == 0) {  
        echo "<td>" . $nama_depan . " " . $nama_belakang . "</td>";
    } elseif ($i % 3 == 0) {  
        echo "<td>" . $nama_depan . "</td>";
    } elseif ($i % 5 == 0) {  
        echo "<td>" . $nama_belakang . "</td>";
    } else {
        echo "<td>" . $i . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
