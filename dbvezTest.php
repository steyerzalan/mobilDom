<?php
require_once 'dbvezerlo.php';

class DBcontr_test
{
    public function tesztFuttat()
    {
        echo "teszt indítása... \n";
        $db=new DBController();

        if ($this->csatlakozasteszt($db))
        {
            echo "Sikeres csati \n";
        }
        else
        {
            echo "SikereTELEN csati \n";
        }

        if($this->SelectQueryteszt($db))
        {
            echo "SIKERES Szedlák lekérdezés \n";
        }
        else
        {
            echo "sikerTELEN Szdelák lekérdezés \n";
        }

        $db->closeDB();
    }
    private function csatlakozasteszt($db)
    {
        $informacio= new ReflectionClass($db);
        $tulajdonsag=$informacio->getProperty('conn');
        $tulajdonsag->setAccessible(true);
        return !is_null($tulajdonsag->getValue($db));
    }

    private function SelectQueryteszt($db)
    {
        //célzott lekérdezés
        $eredmeny=$db->executeSelectQuery("Select m_type from tbl_mobile
         where m_id=1");
        print_r($eredmeny);
        echo "<br>";
        return is_array($eredmeny) && !empty($eredmeny) && 
        isset($eredmeny[0]['m_type']) 
        && $eredmeny[0]['m_type']==1;
    }
}

$teszt=new DBcontr_test();
$teszt->tesztFuttat();