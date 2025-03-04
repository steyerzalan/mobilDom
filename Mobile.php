<?php
require_once 'dbvezerlo.php';

Class Mobile 
{
    private $mobiles = array();
    // DAO Data object
    public function getAllMobile()
    {
        $query= "Select * from tbl_mobile";
        $dbcontroller = new DBController();
        $this->mobiles = $dbcontroller->executeSelectQuery($query);
        return $this->mobiles;
        
    }
}
