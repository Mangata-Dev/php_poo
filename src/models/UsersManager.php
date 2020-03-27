<?php
require_once('SPDO.php');
// include './Users.php';
class UsersManager {

  public $cnx = null ;

  function __construct(){
    $this->cnx = SPDO::getInstance();
  }
  public function getUserForCnx($login,$pwd){
    $cnx = $this->cnx ;
    $stm = $cnx->prepare('SELECT * FROM Users WHERE mail = :login') ;
    $stm->bindParam(':login', $login, PDO::PARAM_STR);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    if($result){
      if(password_verify($pwd,$result['passwordUser'])){
        return $result;
      }
    }else{
      return 0;
    }

  }
  public function getUserById($user_id, $class){
    $cnx = $this->cnx ;
    $stm = $cnx->prepare('SELECT * FROM Users WHERE idUser = :user_id') ;
    $stm->bindParam(':user_id', $user_id, PDO::PARAM_STR);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    if($result){
      return $result ;
    }else{
      return 0;
    }
  }
  public function createUser(Array $userData = array()){
    foreach($userData as $key => $value){
      $$key = $value ;
    }
    $cnx = $this->cnx;
    $stm = $cnx->prepare('INSERT INTO Users(passwordUser,surname,name,mail,telephone,type) Values(:passwordUser,:surname,:name,:mail,:telephone,:type) ');
    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $stm->bindParam(':passwordUser',$hashPwd, PDO::PARAM_STR);
    $stm->bindParam(':surname',$surname,PDO::PARAM_STR);
    $stm->bindParam(':name',$name,PDO::PARAM_STR);
    $stm->bindParam(':mail',$mail,PDO::PARAM_STR);
    $stm->bindParam(':telephone',$telephone,PDO::PARAM_STR);
    $stm->bindParam(':type',$type,PDO::PARAM_STR);
    $response =  $stm->execute();
    return $response ;
  }
}
