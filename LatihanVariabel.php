<?php
// Deklarasi variabel dengan array yang berisi nama-nama hari
$days = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

// Menggunakan loop untuk menampilkan setiap nama hari dengan tambahan "hari 1 = "
foreach ($days as $key => $day) {
    echo "Hari " . ($key + 1) . " : " . $day . "<br>";
}
?>