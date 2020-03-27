<?php
require 'SellerDashboard.php';
require 'BuyerDashboard.php';

class UserDashboard {
  private $instance;
  function __construct($type,$user_id){
      $class = $type.'Dashboard';
      $this->instance = new $class($user_id);
  }
  private function getInstance(){
    return $this->instance;
  }
  function getDashboard(){
    $instance = $this->getInstance();
    return $instance->getDashboard();
  }
}
