<?php
/**
 * Created by PhpStorm.
 * User: байрам
 * Date: 11.05.2015
 * Time: 8:15
 */
class DB {
    public $db_name;
    public $db_user;
    public $db_host;
    public $db_pass;

    public function  __construct($db_host, $db_user, $db_pass, $db_name){
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
    }


}