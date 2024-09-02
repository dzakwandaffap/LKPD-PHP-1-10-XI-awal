

<?php

$data_umur = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
$batas_umur = 17;
$jumlah_dewasa = 0;
$belum_dewasa = 0;


foreach ($data_umur as $umur) {

    
    if ($umur >= $batas_umur) {
        $jumlah_dewasa++;
    }elseif($umur < $batas_umur){
        $belum_dewasa++;
    }
    

}


echo "Jumlah kategori dewasa adalah $jumlah_dewasa";
echo "<br>";
echo "Jumlah Kategori belum dewasa adalah $belum_dewasa";

?>