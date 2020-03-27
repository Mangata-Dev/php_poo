<?php


class SellerDashboard {

  private $seller;



  function __construct($seller_id){
    $manager = new UsersManager();
    $this->seller = ArrayMapperSeller::map($manager->getUserById($seller_id,'Seller'));

  }

  public function getDashboard(){
    $dashboard = '';
    //TODO bandeau a titre informative sur ce vendeur
    $seller = $this->seller ;
  
    $products_list_of_seller = $this->seller->getProductList(); //TODO table de produit vendu

    $products = ArrayMapperProduct::map($products_list_of_seller); // convert array of array to array of object Product
    foreach($products as $product){
        $dashboard += "<tr>
                          <td>{$product->getId()}</td>
                          <td>{$product->getName()}</td>
                          <td>{$product->getPrice()}</td>
                          <td>{$product->getStock()}</td>
                      </tr>
        ";
    }

    return $dashboard ;
  }


}
