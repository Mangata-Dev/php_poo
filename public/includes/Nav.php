<?php

class Nav {
  private $is_user_nav = false;

  function __construct($is_user){
    $this->is_user_nav  = $is_user ;
  }
  public function getIsUser(){
    return $this->is_user_nav ;
  }
  public function getNav(){
      $log_in = !$this->getIsUser() ?  "<li class='nav-item'><a class='nav-link' href='/?page=login'>Se connecter</a> </li>" : '' ;
      $disconnect =$this->getIsUser() ?  "<li class='nav-item disconnect'><a class='nav-link' href='#'>Se deconnecter</a> </li>" : ''  ;
      $nav= '
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/index">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            '.$disconnect.'
            '.$log_in.'
          </ul>
        </div>
      </nav>
      ';
      return $nav;

  }
}
