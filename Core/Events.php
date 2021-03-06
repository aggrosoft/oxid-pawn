<?php


namespace Aggrosoft\Pawn\Core;


class Events
{
    public static function onActivate()
    {
        $queries = [
            'ALTER TABLE oxarticles ADD COLUMN AGISPAWN tinyint(1) default 0',
            'ALTER TABLE oxarticles ADD COLUMN AGPAWN DOUBLE NULL',
            'ALTER TABLE oxorder ADD COLUMN AGTOTALNETPAWN DOUBLE NULL',
            'ALTER TABLE oxorder ADD COLUMN AGTOTALBRUTPAWN DOUBLE NULL',
            'ALTER TABLE oxorder ADD COLUMN AGTOTALORDERPAWN DOUBLE NULL',
        ];

        foreach($queries as $query){
            try{
                \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute($query);
            }catch(\Exception $e){

            }
        }

    }
}