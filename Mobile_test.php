<?php
require_once 'Mobile.php';

function testGetAllMobile()
{
    $mobileObj = new Mobile();

    $mobiles =$mobileObj->getAllMobile();
    // ellenőrizzük, hogy nem üres a lekérdezés
    if(empty($mobiles))
    {
        echo "Nincs adat. \n";
    }
    else
    {
        print("Mobilok felsorolása: \n");
        echo "<br>";
        //print_r($mobiles);
        foreach($mobiles as $mobile)
        {
            echo "id: " . $mobile['m_id']. " | Leírás: " 
            . $mobile['m_desc'] . "\n";
            echo "<br>";
        }

    }
}

//teszt futtatása
testGetAllMobile();