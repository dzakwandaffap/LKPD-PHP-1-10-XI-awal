<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nomor1</title>
</head>
<body>
    
<form method="post">
  
    <label for="teks">Masukan Teks</label>
    <input type="text" id="teks" name="teks" required>
    <br><br>
    <button type="submit">Click</button>

</form>

</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $teks = ($_POST['teks']);
    
    $cek = filter_var($teks, FILTER_SANITIZE_NUMBER_INT);

    if($cek){
        echo "teks mengandung angka yaitu $cek";
    }else{
        echo "teks tidak mengandung angka";
    }
        
   

    
}
?>