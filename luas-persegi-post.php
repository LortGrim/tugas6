<h2>MENGHITUNG LUAS PERSEGI</h2>
<form method="POST">
    <input type="text" name="angka1" placeholder="Sisi (cm)"><br>
    <input type="submit" value="Hitung">
</form>
<?php
if (isset($_POST['angka1']) && $_POST['angka1'] !== '') {
    $sisi = $_POST['angka1'];
    $hasil = $sisi * $sisi;
    echo  "Luas Persegi adalah $hasil cm²";
}
?>