<?php
class User{
    public $name;
    public $email;
    public $country;

    public function  __construct($name, $email, $country){
        $this->name = $name;
        $this->email = $email;
        $this->country = $country;
    }


}

$bayram = new User("Bayram", "bayram88@live.ru", "Tadjikistan");
echo $bayram->email;
$bayram->email = "bairam.hamraev@mail.ru";
echo "<br>";
echo $bayram->email;