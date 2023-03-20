<?php


class Db
{

    public static function getConnection()
    {

        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        //bazaga ulanish
        $connect = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($connect, $params['user'], $params['password']);

        // kadirovkani ko'rsatish
        $db->exec("set names utf8");
        return $db;
    }
}
?>







