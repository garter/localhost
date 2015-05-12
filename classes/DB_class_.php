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
        mysql_connect('localhost', 'root', '');
        mysql_select_db('test');

    }

}

