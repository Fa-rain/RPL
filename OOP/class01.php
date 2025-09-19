<?php

// class
class Buah {
    // properti : yang dipunyai sebuah class
    // access modifier (public, protected, private)
    public $nama; // ini dinamakan inisialisasi obyek
    public $warna;
    public $weight;
    public $price;

    // constructor
    public function __construct($nama, $warna, $weight, $price){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->weight = $weight;
        $this->price = $price;
    }

    // method
    function set_nama($nama){
        $this->nama = $nama;
    }

    function get_nama(){
        return $this->nama;
    }

    protected function info(){
        echo "{$this->nama} berwarna {$this->warna} {$this->weight} harganya {$this->price}!";
    }

    function get_info(){

    }
}

// inheritance
Class Strawberry extends Buah{

}
// object
$apel = new Buah("apel", "Merah","1 kg", "Rp 20.000"); // ini dinamakan instansiasi obyek

// abstract
// interface


// polymorphime
// override

// inisialisasi tidak sama dengan instansiasi

?>