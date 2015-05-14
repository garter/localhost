<?php
/**
 * Created by PhpStorm.
 * User: байрам
 * Date: 11.05.2015
 * Time: 8:55
 */

class DB {

    private $dbh;
    public function __constuct()
    {
        $this->$dbh = new PDO('mysql:dbname=test;host=localhost', 'root', '');//Подключаемся к БД
    }
    //метот прнимает два параметра 1-сам запрось 2-подстановки
    public function query($sql, $param = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth-.execute($param);
        $res = $sth->fetchAll();

        return $res;
    }


}

