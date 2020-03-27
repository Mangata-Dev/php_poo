<?php

if (session_status() == PHP_SESSION_NONE) {

   session_start();

}

// spl_autoload_register(function ($class_name) {
//     include $class_name . '.php';
// });

$autorized_user = ["dashboard"];

$page = $_GET['page'] ?? 'default' ;
if($page === 'default' ){
  if(isset($_SESSION['is_user'])){
      $page = 'dashboard';
  }else{
      $page = 'acceuil';
  }
}
if(isset($_SESSION['is_user']) && in_array($page ,$autorized_user)){
  include "./public/$page.php";
}else if( ! in_array($page ,$autorized_user)){
  include "./public/$page.php";
}else{
  include "/public/accueil";
}
