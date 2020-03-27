<?php
require './src/models/User.php';
require './src/models/ProductManager.php';
class Seller extends User {
  private $productManager;
  private $products= [] ;

  function __construct($id ,$surname,$name,$pwd,$mail,$telephone, $type){
    parent::__construct($id ,$surname,$name,$pwd,$mail,$telephone, $type);

    $this->productManager = new ProductManager();
    $this->products = $this->getProductList();
  }

  function getProductList(){
    $manager = $this->productManager;
    return  $manager->getProductsBySellerId($this->getId());
  }
}
