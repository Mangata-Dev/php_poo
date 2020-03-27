<?php
include("./public/includes/Nav.php");
class Header {

  private $title = "";
  private $styles = [];
  private $is_user = false ;

  function __construct($title, $is_user){
    $this->title = $title ;
    $this->is_user = $is_user;
  }

  public function setTitle($title){
    $this->title = $title ;
  }
  public function getTitle(){
    return $this->title;
  }
  public function getNavbar(){
    return new Nav($this->is_user);
  }
  public function addStyle($newStyle){
    array_push($this->styles , $newStyle);
  }
  public function getStyles(){
    foreach($this->styles as $style  ){
      echo $style;
    }
  }
  public function display_header(){
    $header = "<!DOCTYPE html>
    <html lang=\"en\" >
      <head>
        <link rel='stylesheet' href='./../../assets/css/style.css'>
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.css\">".
        $this->getStyles()."
        <meta charset=\"utf-8\">
        <title>".$this->getTitle()."</title>
      </head>
      <header>".$this->getNavbar()->getNav() ."</header>
      <body>";
      return $header;
  }

}
