<?php
    spl_autoload_register(function($class_name){require 'classes/'.$class_name.'.php';});

    $micka = new Client ("MURMANN","Micka");
    echo $micka;

    $b1 = new Booking ("01-01-2021","02-01-2021");
    echo $b1;
?>