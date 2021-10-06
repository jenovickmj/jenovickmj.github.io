<?php
try
{
    $db=new PDO("mysql:host=127.0.0.1:3306;dbname=boisson","root","");
}
catch(Exception $ex)
{
    die('Erreur:'.$ex->getMessage());
}