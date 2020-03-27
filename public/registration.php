<?php
include("./public/includes/Header.php");
include("./public/includes/Footer.php");
$header = new Header("Registration", false);
$header->addStyle("<link rel='stylesheet' href='./../../assets/css/registration.css'>");
echo $header->display_header();
?>
<div class="container">
  <div class="row form-container">
    <div class="alert" role="alert">

    </div>
    <form class="bg-primary" id="registration-form"  enctype="multipart/form-data"  method="post">
      <div class="form-group">
        <label for="type"> Enregistrer en tant que :</label>
        <select class="form-control" name="type">
          <option value="Seller">Vendeur</option>
          <option value="Buyer"> Acheteur</option>
        </select>
        <label for="name">Prénom</label>
        <input class="form-control" type="text" name="name" value="" required>
        <label for="surname">Nom</label>
        <input class="form-control" type="text" name="surname" value="" required>

      </div>
      <div class="form-group">
        <label for="mail">Email</label>
        <input class="form-control" type="text" name="mail" value="" required>
        <label for="pwd">Mot de passe</label>
        <input class="form-control" id="pwd" type="password" name="pwd" value="" required >
        <label for="pwd2">Confirmer mot de passe</label>
        <input class="form-control" id="pwd2" type="password" name="pwd" value="" required >
        <label for="telephone">Téléphone</label>
        <input class="form-control" type="text" name="telephone" value="" required>
      </div>
      <div class="form-group">
        <input class="btn btn-success" type="submit" name="btn" value="S'enregistrer">
      </div>
    </form>
  </div>
</div>

<?php
$footer = new Footer();
$footer->addScripts('<script type="text/javascript" src="./../../assets/js/registration.js"></script>');
echo $footer->getFooter();
?>
