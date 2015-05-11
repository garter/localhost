<?php
/**
 * Created by PhpStorm.
 * User: байрам
 * Date: 11.05.2015
 * Time: 8:55
 */

class DB {
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "bayram";

    public function __constuct(){
        mysqli_connect(DB::DB_HOST, DB::DB_USER, DB::DB_PASS, DB::DB_NAME);

    }

}

$db = new DB();
$res = $db->query("SELECT * FROM `BORYA`"):
$row = fetch_assoc($res);

echo var_dump($row);