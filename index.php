<?php
    spl_autoload_register(function($class_name){require 'classes/'.$class_name.'.php';});

    //Hotel instances
    $hilton = new Hotel("Hilton ****","10 route de la Gare 67000 STRASBOURG");
    $regent = new Hotel("Regent ****","61 rue Dauphine 75006 PARIS");

    //Client instances
    $micka = new Client ("MURMANN","Micka");
    $virgile = new Client ("GIBELLO","Virgile");
    
    //Room instances
    $r1 = new Room ($hilton, 1, 120, false);
    $r2 = new Room ($hilton, 2, 120,  false);
    $r3 = new Room ($hilton, 3, 120,  false);
    $r4 = new Room ($hilton, 4, 120,  false);
    $r16 = new Room ($hilton, 16, 300,  true);
    $r17 = new Room ($hilton, 17, 300,  true);
    $r18 = new Room ($hilton, 18, 300,  true);
    $r19 = new Room ($hilton, 19, 300,  true);
    
    //Booking instances
    $b1 = new Booking ($virgile, $r17, "01-01-2021", "05-01-2021");
    $b2 = new Booking ($micka, $r3,"11-03-2021","15-03-2021");
    $b3 = new Booking ($micka, $r4, "01-04-2021", "17-04-2021");

    echo $hilton->showRooms()."<br>";
    
    
    echo $hilton->getHotelInfo()."<br>";
    echo $hilton->showBookedRooms()."<br>";
    echo $micka->showBookings()."<br>";
    
?>