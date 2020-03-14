<?php
$uang = 2921690;
$bunga = ($uang*0.021);

for ($i = 1; $i<=12; $i++) {
        $uang = $uang + $bunga;
        echo " bulan ke-" .$i. " jumlah uang ". $uang;
        echo "<br>";
}

?>