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

    public function queri($sql)
    {
        $res = mysql_query($sql);
        if (false === $res)
        {
            return false;
        }

        $ret = [];
        while ($row = mysql_fetch_object($res))
        {
            $ret[] = $row;
        }
        return $ret;
    }

}

