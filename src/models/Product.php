<?php
class Product{
    private $id;
    private $name;
    private $price;
    private $stock;

    function __construct($id,$name,$price,$stock = null){
      $this->id =$id;
      $this->name =$name;
      $this->price = $price;
      $this->stock = $stock ;

    }
    public function setId($id){
      $this->id = $id;
    }
    public function getId(){
      return $this->id ;
    }
    public function setName($name){
      $this->name = $name;
    }
    public function getName(){
      return $this->name;
    }
    public function setPrice($price){
      $this->price = $price;
    }
    public function getPrice(){
      return $this->price;
    }
    public function setStock($stock){
      $this->stock = $stock;
    }
    public function getStock(){
      return $this->stock;
    }

}
