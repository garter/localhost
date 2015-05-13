<?php
/**
 * Created by PhpStorm.
 * User: байрам
 * Date: 11.05.2015
 * Time: 8:55
 */

class DB {

    public function __constuct()
    {
        $link = "'localhost', 'root', '', 'test'";
         mysqli_connect($link);

    }

    public function query($string)
    {
        $res = $this->query($string);
        return $res;
    }


}

