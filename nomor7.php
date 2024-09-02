<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nomor 7</title>
</head>
<body>
    
<form method="post" action="">
    <label for="name1">Nama Pertama:</label>
    <input type="text" id="name1" name="name1" required>
    <br><br>
    <label for="name2">Nama Kedua:</label>
    <input type="text" id="name2" name="name2" required>
    <br><br>
    <button type="submit">Click</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name1 = ($_POST['name1']);
    $name2 = ($_POST['name2']);

    $panjang_input1 = strlen($name1);
    $panjang_input2 = strlen($name2);

    $perbandingan_input = abs($panjang_input1 - $panjang_input2);

    if($panjang_input1 > $panjang_input2){
    echo "<p> $name1 memiliki jumlah karkater lebih banyak dari $name2 :selisih $perbandingan_input</p>";
    }elseif($panjang_input1 < $panjang_input2){
        echo "<p> $name2 memiliki jumlah karkater lebih banyak dari $name1 :selisih $perbandingan_input</p>";
    }else{
        echo "<p> $name1 memeiliki jumlah karakter yang sama dengan $name2 </p>";
    }
}
?>  

</body>
</html>
