<?php

class BuyerDashboard {

  private $buyer;

  function __construct($buyer_id){
    $manager = new UsersManager();

    $this->buyer = $manager->getUserById($buyer_id,'Buyer'); ;
  }

  public function getDashboard(){
    $infos_buyer = '';

    //TODO bandeau a titre informative sur ce vendeur
    $products_list_of_buyer = []; //TODO table de produit vendu

    $dashboard = '';
    return $dashboard ;
  }
}
