<?php

include './../models/ProductManager.php';

$controller = new ProductController();
$action = $_POST['action'] ?? 'noActionError' ;
$controller->action($action);

class ProductController{


  private $productManager = null;
  public function getUserManager(){
    return $this->productManager ;
  }
  function __construct(){
    $this->productManager = new ProductManager();
  }
  function action($action){
     $this->$action();
  }
  function addNewProduct(){
    $product=[];
    $seller_id = $_POST['user'] ?? false ;
    $product['product_name'] = $_POST['product_name'] ?? false ;
    $product['product_stock'] = $_POST['product_stock'] ?? false;
    $product['product_price']= $_POST['product_price'] ?? false ;

      //TODO gestion d'erreur
      $manager = $this->getUserManager();
      $manager->createNewProduct($product);
      echo json_encode([ 'status' => 'success', 'message' => 'Votre produit à était ajoutée avec succés !']);
  }
  function errorAddProduct(){
    echo json_encode([ 'status' => 'warning', 'message' => 'Des informations sont manquantes !']);
  }
}
