<?php
require_once __DIR__."/models/News.php";

$items = News::getAll();

var_dump($items);