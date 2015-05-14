<?php
/**
 * Created by PhpStorm.
 * User: байрам
 * Date: 14.05.2015
 * Time: 8:04
 */

 abstract class AbstractModel {
     static protected $table; //дольжен содержать имена таблиц

     public static function getTable()
     {
         return self::$table; //statik это поздное связывание self раннии связывание
     }

} 