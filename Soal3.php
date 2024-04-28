<!DOCTYPE html>
    <h1>Latihan Perulangan</h1>

    <?php
    // Data siswa dalam bentuk array
    $dataSiswa = [
        ["No Urut" => 1, "Poin" => 75, "Siswa" => "Adi"],
        ["No Urut" => 2, "Poin" => 80, "Siswa" => "Joni"],
        ["No Urut" => 3, "Poin" => 65, "Siswa" => "Jihan"],
        ["No Urut" => 4, "Poin" => 70, "Siswa" => "Aya"],
        ["No Urut" => 5, "Poin" => 85, "Siswa" => "Ita"],
        ["No Urut" => 6, "Poin" => 90, "Siswa" => "Budi"],
        ["No Urut" => 7, "Poin" => 95, "Siswa" => "Tini"],
        ["No Urut" => 8, "Poin" => 65, "Siswa" => "Sari"],
    ];

    // a) Tampilkan poin siswa dengan nomor urut 5
    for ($i = 0; $i < count($dataSiswa); $i++) {
        if ($dataSiswa[$i]["No Urut"] == 5) {
            echo "a. Poin siswa dengan nomor urut 5 : " . $dataSiswa[$i]["Poin"] .  " dengan nama "  . $dataSiswa[$i][ "Siswa"] . "<br>";
            break; // Keluar dari perulangan setelah data ditemukan
        }
    }

    echo "<hr>";

    // b) Tampilkan semua nama siswa yang memiliki poin 90
    for ($i = 0; $i < count($dataSiswa); $i++) {
        if ($dataSiswa[$i]["Poin"] == 90) {
            echo "b. Nama siswa dengan poin 90 : " . $dataSiswa[$i]["Siswa"] . "<br>";
        }
    }

    echo "<hr>";

    // c) Tampilkan semua nama siswa yang memiliki poin 100 (hasil: tidak ada)
    $adaSiswaPoin100 = false; // Variabel untuk menandakan apakah ada siswa dengan poin 100
    for ($i = 0; $i < count($dataSiswa); $i++) {
        if ($dataSiswa[$i]["Poin"] == 100) {
            echo "c. Nama siswa dengan poin 100: " . $dataSiswa[$i]["Siswa"] . "<br>";
            $adaSiswaPoin100 = true; // Menandakan bahwa ada siswa dengan poin 100
            break; // Keluar dari perulangan setelah data ditemukan
        }
    }

    if (!$adaSiswaPoin100) {
        echo "c. Nama siswa dengan poin 100 : Tidak Ada";
    }
    ?>

</html>
