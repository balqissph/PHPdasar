<!DOCTYPE html>
<html>
<body>
    <h2>Konversi Angka ke Terbilang</h2>
    <form method="post" action="">
        <label>Masukkan angka (1-9):</label><br>
        <input type="number" name="angka" min="1" max="9" required><br><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    function konversiTerbilang($angka) {
        switch ($angka) {
            case 1:
                return "SATU";
                break;
            case 2:
                return "DUA";
                break;
            case 3:
                return "TIGA";
                break;
            case 4:
                return "EMPAT";
                break;
            case 5:
                return "LIMA";
                break;
            case 6:
                return "ENAM";
                break;
            case 7:
                return "TUJUH";
                break;
            case 8:
                return "DELAPAN";
                break;
            case 9:
                return "SEMBILAN";
                break;
            default:
                return "Angka tidak valid";
        }
    }

    // Memproses inputan pengguna
    if (isset($_POST['submit'])) {
        $angka = $_POST['angka'];
        echo "<br>Angka $angka dalam terbilang adalah: " . konversiTerbilang($angka);
    }
    ?>
</body>
</html>
