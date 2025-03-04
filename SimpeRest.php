<?php
// * szabályok és minta

class SimpleRest
{
    private $httpVersion ='HTTP/1.1';

    public function setHttpHeaders($contentType, $statusCode)
    {
        $statusMessage= $this->getHttpMessage($statusCode);

        header($this->httpVersion . " " . $statusCode . " " . $statusMessage);
        header('Content-Type:' . $contentType);
    }

    public function getHttpMessage($statusCode)
    {
        $httpStatus = array(
            200 => 'OK',
            400 => 'Bad Request',
            404 => 'Not Found',
            500 => 'Internal Server Error'
        );
        return (isset($httpStatus[$statusCode])) 
        ? $httpStatus[$statusCode] : $httpStatus[500];
    }
}