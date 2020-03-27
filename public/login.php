<?php
include("./public/includes/Header.php");
include("./public/includes/Footer.php");
$header = new Header("Acceuil", false);
$header->addStyle("<link rel='stylesheet' href='./../../assets/css/login.css'>");
echo $header->display_header();
?>
<div class="container">
  <div class="row form-container">
    <form class="bg-primary" id="login-form"  enctype="multipart/form-data"  method="post">
      <div class="form-group">
        <label for="id">Identifiant</label>
        <input class="form-control" type="text" id="id" name="id" value="" required>
        <label  for="pwd">Mot de passe</label>
        <input class="form-control" type="password" id="pwd" name="pwd" value="" required >
      </div>
      <div class="form-group">
        <a href="#">Mot de passe oublié ?</a> /
        <a href="/?page=registration">S'inscrire</a>
      </div>
      <div class="form-group">
        <input class="btn btn-success" type="submit" name="btn" value="Se connecter">
      </div>
    </form>
  </div>
</div>

<?php
$footer = new Footer();
$footer->addScripts('<script type="text/javascript" src="./../../assets/js/login.js"></script>');
echo $footer->getFooter();
?>
