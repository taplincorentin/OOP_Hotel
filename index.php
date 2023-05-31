<?php
    spl_autoload_register(function($class_name){require 'classes/'.$class_name.'.php';});

    //Hotel instances
    $hilton = new Hotel("Hilton ****","10 route de la Gare 67000 STRASBOURG");

    //Client instances
    $micka = new Client ("MURMANN","Micka");
    $virgile = new Client ("Gibello","Virgile");
    
    //Room instances
    $r3 = new Room ($hilton,3,120,true,false);
    $r17 = new Room ($hilton,17, 300, true, true);
    
    //Booking instances
    $b1 = new Booking ($micka,$r3,"11-03-2021","12-03-2021");

    echo $b1;
?>