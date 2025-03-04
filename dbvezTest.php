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

        $db->closeDB();
    }
    private function csatlakozasteszt($db)
    {
        $informacio= new ReflectionClass($db);
        $tulajdonsag=$informacio->getProperty('conn');
        $tulajdonsag->setAccessible(true);
        return !is_null($tulajdonsag->getValue($db));
    }
}

$teszt=new DBcontr_test();
$teszt->tesztFuttat();