<h2>Menampilkan Nilai Ganjil atau Genap</h2>
<?php
// Array dengan nilai-nilai
$angka = array(12, 13, 15, 16, 67, 189, 346, 876 , 54232, 3256);

foreach ($angka as $nilai) {
    echo "Nomor : $nilai ";
    if ($nilai % 2 == 0) {
        echo "genap.<br>";
    } else {
        echo "ganjil.<br>";
    }
}
?>