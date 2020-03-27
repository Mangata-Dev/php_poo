<?php

include './../models/UsersManager.php';

$controller = new ControllerUser();
$action = $_POST['action'] ?? 'noActionError' ;
$controller->action($action);
class ControllerUser   {

  private $userManager = null;
  public function getUserManager(){
    return $this->userManager ;
  }
  function __construct(){
    $this->userManager = new UsersManager();

  }
  function action($action){
    $this->$action();
  }

  function tryConnectUser(){
    $login =  $_POST['login'] ?? false ;
    $pwd =  $_POST['pwd'] ?? false ;
    if($login && $pwd){
      $manager = $this->getUserManager();
      $user = $manager->getUserForCnx($login,$pwd);
      if($user){
        session_start();
        $_SESSION['is_user'] = true;
        $_SESSION['user_id'] = $user['idUser'];
        $_SESSION['user_type'] = $user['type'];
        $_SESSION['name'] = $user['name'];
              echo  json_encode(['status' => 'success', 'message' => 'Bienvenue !']);
      }else{
              echo  json_encode(['status' => 'warning', 'message' => 'identifiants incorrect !']);
      }
    }else{
      echo  json_encode(['status' => 'warning', 'message' => 'Une erreur est survenue !']);
    }
  }

  function createNewUser(){
    $dataUser = [];
    $dataUser['name'] =  $_POST['name'] ?? false;
    $dataUser['surname'] = $_POST['surname'] ?? false ;
    $dataUser['societe'] = $_POST['societe'] ?? false ;
    $dataUser['pwd'] = $_POST['pwd'] ?? false ;
    $dataUser['mail'] =   $_POST['mail'] ?? false;
    $dataUser['telephone'] = $_POST['telephone'] ?? false ;
    $dataUser['type'] = $_POST['type'] ??  false ;

    $manager = $this->getUserManager() ;

    $msg = $manager->createUser($dataUser);
    
    if($msg){
      echo json_encode(['status' =>'success','message' => 'Vous compte à bien été créer !']);
    }else{
      echo  json_encode(['status' => 'warning', 'message' => 'Une erreur est survenue !']);
    }
  }
  function noActionError(){
    echo json_encode([ 'status' => 'warning', 'message' => 'L\'action souhaitée n\'existe pas']);
  }
  function errorRegistration(){
    echo json_encode([ 'status' => 'warning', 'message' => 'Des informations sont manquantes !']);
  }
}
