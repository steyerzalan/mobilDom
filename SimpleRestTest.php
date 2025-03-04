<?php
require_once 'SimpeRest.php';
function testSimpleRest()
{
    //példányosítás
    $simpleRestObj = new SimpleRest();

    // set fejléc json válasz
    $simpleRestObj->setHttpHeaders('application/json', 200);

    //Json válasz adat
    $responseData = array (
        'status' => 'OK',
        'message' => 'Sikeres Válasz.',
        'http_status_message: ' =>$simpleRestObj->getHttpMessage(200)
    );

    echo json_encode($responseData);
}
// teszt futi
testSimpleRest();
