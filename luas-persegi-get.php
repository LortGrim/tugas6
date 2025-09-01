<h2>MENGHITUNG LUAS PERSEGI</h2>
<form method="GET">
    <input type="text" name="angka1" placeholder="Sisi (cm)"><br>
    <input type="submit" value="Hitung">
</form>
<?php
if (isset($_GET['angka1']) && $_GET['angka1'] !== '') {
    $sisi = $_GET['angka1'];
    $hasil = $sisi * $sisi;
    echo  "Luas Perseginya adalah $hasil cm²";
}
?>