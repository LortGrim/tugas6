<h2>MENGHITUNG LUAS SEGITIGA</h2>
<form method="GET">
    <input type="text" name="alas" placeholder="Alas (cm)"><br>
    <input type="text" name="tinggi" placeholder="Tinggi (cm)"><br>
    <input type="submit" value="Hitung">
</form>
<?php
if (isset($_GET['alas']) && $_GET['alas'] !== '' && isset($_GET['tinggi']) && $_GET['tinggi'] !== '') {
    $alas = $_GET['alas'];
    $tinggi = $_GET['tinggi'];
    $hasil = 0.5 * $alas * $tinggi;
    echo "Luas Segitiga adalah $hasil cm²";
}
?>
