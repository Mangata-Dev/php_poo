<?php
require './src/models/Product.php';
class ArrayMapperProduct {
  public static function mapList(Array $products){
    $productListObject = [];
    foreach( $products as $product ){
      array_push($productListObject, self::map($product));
    }
    return $productListObject ;
  }
  public static function map($product){
    $product = new Product($product['product_id'],$product['name'],$product['price'],$product['stock']);
    return $product;
  }
}
