<?php
require_once 'SimpeRest.php';
require_once 'Mobile.php';

class MobileRestHandler extends SimpleRest
{
    function getAllMobiles()
    {
        $mobile=new Mobile();
        $rawData =$mobile->getAllMobile();

        if (empty($rawData))
        {
            $statusCode=404;
            $rawData = array('error' => 'Nem találtam Mobilt!');
        }
        else
        {
            $statusCode =200;
        }

        $requesContentType = 'application/json';
        $this->setHttpHeaders($requesContentType, $statusCode);
        $result['output']=$rawData;
        
        if(strpos($requesContentType, 'application/json')!==false)
        {
            $response=$this->encodeJson($result);
            echo $response;
        }
    }
    public function encodeJson($responseData)
    {
        $jsonResponse=json_encode($responseData);
        return $jsonResponse;
    }
}