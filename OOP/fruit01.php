<?php

class Fruit01 {
    // Properties
    public $name;
    public $color;
    
    // Methods atau function
    function set_name($name) {
        $this->name = $name;
    }

    function get_name(){
        echo $this->name;
        return $this->name;
    }
}

    // Object
    $apple = new Fruit01();
    $apple->set_name(name: "Apel");
    echo $apple->get_name();
    echo "<br>";
    
    $apple->get_name();
  




?>