<?php


$lima = 5;
$loop = 1;

while($loop <= 12) {


    if($loop % 2 != 0 ){
        $hasil = $loop * $lima;
        echo " $loop x $lima  = $hasil <br>";
    }

    $loop++;


}


?>