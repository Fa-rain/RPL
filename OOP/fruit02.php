<?php

class Fruit02 {
    // Properties
    public $name;
    public $color;
    public $price;

    // Methods atau function

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_price($price) {
        $this->price = $price;
    }

    function get_price(){
        return $this->price;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }

    function get_info(){
        echo "lol";
    }
}

    $apple = new Fruit02();
    $banana = new Fruit02();
    $watermelon = new Fruit02();
    
    $apple->set_name("Apel ");
    echo $apple->get_name();
    
    $apple->set_color("Merah");
    echo $apple->get_color();
    echo " Harganya ";

    $apple->set_price(2000);
    echo $apple->get_price();
    echo "<br>";
    echo "<hr>";
    
    $banana->set_name("Pisang ");
    echo $banana->get_name();

    $banana->set_color("Kuning");
    echo $banana->get_color();
    echo " Harganya ";

    $banana->set_price(1000);
    echo $banana->get_price();




?>