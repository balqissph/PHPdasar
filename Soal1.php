<?php
// Deklarasi variabel gaji pokok dan tunjangan
$gaji_pokok = 3250000; // Gaji pokok Rp. 3.250.000,-
$tunjangan_jabatan = 1200000; // Tunjangan jabatan Rp. 1.200.000,-

// Menghitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

// Menghitung pajak penghasilan (10% dari gaji kotor)
$pajak = 0.10 * $gaji_kotor;

// Menghitung gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;
?>
    
<p>
    Gaji Pokok: Rp. <?php echo number_format($gaji_pokok, 0, ',', '.'); ?>,- <br>
    Tunjangan Jabatan: Rp. <?php echo number_format($tunjangan_jabatan, 0, ',', '.'); ?>,- <br>
    Gaji Kotor: Rp. <?php echo number_format($gaji_kotor, 0, ',', '.'); ?>,- <br>
    Pajak: Rp. <?php echo number_format($pajak, 0, ',', '.'); ?>,- <br>
    Gaji Bersih: Rp. <?php echo number_format($gaji_bersih, 0, ',', '.'); ?>,-
</p>

<h3>Cara Menghitung:</h3>
<p>
    Gaji kotor = Gaji Pokok + Tunjangan Jabatan = Rp. <?php echo number_format($gaji_kotor, 0, ',', '.'); ?>,- <br>
    Pajak Penghasilan = 10% dari Gaji Kotor = 0.10 * Rp. <?php echo number_format($gaji_kotor, 0, ',', '.'); ?>,- = Rp. <?php echo number_format($pajak, 0, ',', '.'); ?>,- <br>
    Gaji Bersih = Gaji Kotor - Pajak = Rp. <?php echo number_format($gaji_bersih, 0, ',', '.'); ?>,-
</p>