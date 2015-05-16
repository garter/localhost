<?php
//$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//$pathParts = explode('/', $path);
//var_dump($pathParts);
//die;

mysql_connect('localhost', 'root', '');
mysql_select_db('test');
$res = mysql_query('SELECT * FROM `news`');

while($arr = mysql_fetch_array($res, MYSQL_ASSOC)){

    echo "<h3>".$arr["title"]."</h3><br>";
    echo "<p>".$arr["desc"]."</p><br>";
    echo "<i bgcolor='red'>".$arr["pubdate"]."</i>";
    echo "<hr>";
}
