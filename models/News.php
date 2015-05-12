<?php
require_once __DIR__."/../classes/DB_class_.php";

class News{
    public $id;
    public $title;
    public $desc;
    public $pubdate;

   static  public function getAll()
    {
        $db = new DB();
        $sql = "SELECT * FROM `news`";
        return $db->queri($sql);
    }
}