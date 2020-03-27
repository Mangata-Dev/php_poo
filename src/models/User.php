<?php

class User{

  private $surname;
  private $name;
  private $id;
  private $pwd;
  private $mail;
  private $telephone;
  private $type;

  function __construct($id ,$surname ,$name , $pwd,$mail, $telephone, $type){
    $this->surname = $surname;
    $this->name = $name ;
    $this->id = $id ;
    $this->pwd =$pwd;
    $this->mail = $mail;
    $this->telephone = $telephone;
    $this->type = $type ;
  }

  public function setSurname($surname){
    $this->surname = $surname ;
    return;
  }
  public function getSurname(){
    return $this->surname ;
  }
  public function setName($name){
    $this->name = $name ;
    return;
  }
  public function getName(){
    return $this->name;
  }
  public function setId($id){
    $this->id = $id;
    return;
  }
  public function getId(){
    return $this->id ;
  }
  public function setPwd($pwd){
    $this->pwd = $pwd;
    return;
  }
  public function getPwd(){
    return $this->pwd;
  }
  public function setMail($mail){
    $this->mail = $mail ;
    return;
  }
  public function getMail(){
    return $this->mail;
  }
  public function setTelephone($telephone){
    $this->telephone = $telephone;
    return;
  }
  public function getTelephone(){
    return $this->telephone;
  }
  public function setType($type){
    $this->type = $type ;
    return;
  }
  public function getType(){
    return $this->type ;
  }
}
