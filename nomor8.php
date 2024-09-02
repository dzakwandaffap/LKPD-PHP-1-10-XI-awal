<?php

    $data = [80, 90,75, 100, 85,100, 66];

    $dicari = 100;

    $ada_berapa = array_count_values($data);

    echo "jumlah angka $dicari = $ada_berapa[$dicari]";

?>