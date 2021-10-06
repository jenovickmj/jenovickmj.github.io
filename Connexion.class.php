<?php

/**
 * Created by PhpStorm.
 * User: HONORE
 * Date: 19/02/2020
 * Time: 11:42
 */
class connexion
{

    private static $con;
    public static function getConnexion(){
        if(self::$con == null){
            self::$con = new PDO(BD_DSN,BD_UTILISATEUR, BD_PASSWORD,
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        }
        return self::$con;
    }

}