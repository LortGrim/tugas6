<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Luas Bangun Datar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            width: 350px;
            text-align: center;
        }
        h2 {
            margin-bottom: 15px;
            color: #333;
        }
        select, input[type="text"], input[type="submit"] {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }
        input[type="submit"] {
            background: #007BFF;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        .result {
            margin-top: 15px;
            padding: 12px;
            background: #e9f7ef;
            border: 1px solid #c3e6cb;
            border-radius: 8px;
            color: #155724;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Kalkulator Luas Bangun Datar</h2>
    <form method="POST">
        <label for="bangun">Pilih Bangun Datar:</label><br>
        <select name="bangun" id="bangun" onchange="this.form.submit()">
            <option value="">Pilih Rumus Bidang</option>
            <option value="segitiga" <?= (isset($_POST['bangun']) && $_POST['bangun']=="segitiga") ? "selected" : "" ?>>Segitiga</option>
            <option value="persegi" <?= (isset($_POST['bangun']) && $_POST['bangun']=="persegi") ? "selected" : "" ?>>Persegi</option>
        </select>
    </form>

    <form method="POST">
        <?php
        if (isset($_POST['bangun']) && $_POST['bangun'] == "segitiga") {
            echo '<input type="hidden" name="bangun" value="segitiga">';
            echo '<input type="text" name="alas" placeholder="Alas (cm)" required><br>';
            echo '<input type="text" name="tinggi" placeholder="Tinggi (cm)" required><br>';
        } elseif (isset($_POST['bangun']) && $_POST['bangun'] == "persegi") {
            echo '<input type="hidden" name="bangun" value="persegi">';
            echo '<input type="text" name="sisi" placeholder="Sisi (cm)" required><br>';
        }

        if (isset($_POST['bangun']) && $_POST['bangun'] != "") {
            echo '<input type="submit" value="Hitung">';
        }
        ?>
    </form>

    <?php
    if (isset($_POST['bangun'])) {
        if ($_POST['bangun'] == "segitiga" && isset($_POST['alas']) && isset($_POST['tinggi'])) {
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $hasil = 0.5 * $alas * $tinggi;
            echo "<div class='result'>Luas Segitiga adalah $hasil cm²</div>";
        } elseif ($_POST['bangun'] == "persegi" && isset($_POST['sisi'])) {
            $sisi = $_POST['sisi'];
            $hasil = $sisi * $sisi;
            echo "<div class='result'>Luas Persegi adalah $hasil cm²</div>";
        }
    }
    ?>
</div>
</body>
</html>
