<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<form method="post" action="">
    <label for="masuk">Masuk</label>
    <input type="text" id="masuk" name="masuk" required>
    <br><br>
    <label for="pulang">Pulang</label>
    <input type="text" id="pulang" name="pulang" required>
    <br><br>
    <button type="submit">Click</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $masuk = $_POST['masuk'];
    $pulang = $_POST['pulang'];

   
    $jam_kerja = $pulang - $masuk;
    $max_kerja = 8;

    
    $lembur = $jam_kerja - $max_kerja;

   
    $gocap = 50000;
    $setelah = ($lembur > 1) ? ($lembur - 1) * 25000 : 0;
    
    if ($jam_kerja > $max_kerja) {
        $kompensasi = $gocap + $setelah;
        echo "Lama kerja = $jam_kerja jam<br>";
        echo "Jam lembur = $lembur jam<br>";
        echo "Jumlah kompensasi = Rp $kompensasi";
    } else {
        echo "Tidak ada lembur.";
    }
}
?>