<?php
    include_once './animal1.php';
    include_once './covu.php';
    include_once './khongcovu.php';

    $kcovu = new kcovu();
    $kcovu->voice();
    $kcovu->sinhsan();
    $kcovu->move()."</br>";
    echo "</br>";

?>