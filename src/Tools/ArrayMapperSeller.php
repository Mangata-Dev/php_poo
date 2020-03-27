<?php

require './src/models/Seller.php';
class ArrayMapperSeller {

  public static function map(Array $seller ){
    $seller = new Seller($seller['idUser'],$seller['surname'],$seller['name'],$seller['passwordUser'],$seller['mail'],$seller['telephone'],$seller['type']);
    return $seller;
  }
}
