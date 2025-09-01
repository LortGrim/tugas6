<h2>MENGHITUNG LUAS SEGITIGA</h2>
<form method="POST">
    <input type="text" name="alas" placeholder="Alas (cm)"><br>
    <input type="text" name="tinggi" placeholder="Tinggi (cm)"><br>
    <input type="submit" value="Hitung">
</form>
<?php
if (isset($_POST['alas']) && $_POST['alas'] !== '' && isset($_POST['tinggi']) && $_POST['tinggi'] !== '') {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $hasil = 0.5 * $alas * $tinggi;
    echo "Luas Segitiga adalah $hasil cm²";
}
?>
