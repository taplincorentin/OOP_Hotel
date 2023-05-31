<?php
    spl_autoload_register(function($class_name){require 'classes/'.$class_name.'.php';});

    //Client instances
    $micka = new Client ("MURMANN","Micka");
    $virgile = new Client ("Gibello","Virgile");
    
    //Room instances
    $r3 = new Room (3,120,true,false);
    $r17 = new Room (17, 300, true, true);
    
    //Booking instances
    $b1 = new Booking ($r3,"11-03-2021","12-03-2021");

   
?>