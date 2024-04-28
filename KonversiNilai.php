<!DOCTYPE html>
<html>
<body>
    <h2>Konversi Nilai Angka ke Huruf</h2>
    <form method="post" action="">
        <label>Masukkan nilai angka:</label><br>
        <input type="text" name="nilai" required><br><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    function konversiNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 59) {
            return "C";
        } elseif ($nilai >= 60 && $nilai <= 69) {
            return "BC";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            return "B";
        } elseif ($nilai >= 80 && $nilai <= 89) {
            return "AB";
        } elseif ($nilai >= 90 && $nilai <= 100) {
            return "A";
        } else {
            return "Nilai tidak valid";
        }
    }

    if (isset($_POST['submit'])) {
        $nilai_angka = $_POST['nilai'];

        echo "<br>Nilai huruf untuk nilai angka $nilai_angka adalah: " . konversiNilai($nilai_angka);
    }
    ?>
</body>
</html>
