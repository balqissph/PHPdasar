<?php
// Total uang yang diambil oleh Ani
$uang_diambil = 1387500;

// Array yang berisi nilai pecahan uang yang berlaku
$pecahan_uang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

// Inisialisasi array untuk menyimpan banyaknya masing-masing pecahan uang yang diperoleh Ani
$banyak_pecahan = array();

// Inisialisasi variabel untuk menyimpan jumlah total uang
$total_uang = 0;

// Iterasi melalui setiap pecahan uang untuk menghitung banyaknya pecahan yang diperoleh
foreach ($pecahan_uang as $nilai) {
    // Hitung banyaknya pecahan dengan pembagian
    $banyak_pecahan[$nilai] = floor($uang_diambil / $nilai);
    
    // Kurangi uang diambil dengan jumlah pecahan yang telah diperoleh
    $uang_diambil %= $nilai;

    // Tambahkan jumlah uang dengan nilai total pecahan
    $total_uang += $banyak_pecahan[$nilai] * $nilai;
}

// Menampilkan hasil
echo "Ani mendapatkan:<br>";
foreach ($banyak_pecahan as $nilai => $jumlah) {
    echo $jumlah . " pecahan uang Rp. " . number_format($nilai, 0, ',', '.') . ",-";
    if ($jumlah > 1) {
        echo " (total Rp. " . number_format($jumlah * $nilai, 0, ',', '.') . ",-)<br>";
    } else {
        echo " (total Rp. " . number_format($nilai, 0, ',', '.') . ",-)<br>";
    }
}

// Menampilkan total jumlah uang yang diperoleh Ani
echo "Total jumlah uang yang diperoleh Ani adalah Rp. " . number_format($total_uang, 0, ',', '.') . ",-";
?>
