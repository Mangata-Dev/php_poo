<?php
require_once('SPDO.php');
class ProductManager{

  public $cnx = null ;

  function __construct(){
    $this->cnx = SPDO::getInstance();
  }

  public function getProductsBySellerId($seller_id){
    $cnx = $this->cnx ;
    $stm = $cnx->prepare('SELECT * FROM Products WHERE seller = :seller_id') ;
    $stm->bindParam(':seller_id', $seller_id, PDO::PARAM_INT);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $result ;
  }
  public function createNewProduct($dataProduct){
  
  }
}
