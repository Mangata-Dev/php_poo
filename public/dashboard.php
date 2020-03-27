<?php
// session_start();

include("./public/includes/Header.php");
include("./public/includes/Footer.php");
include("./public/includes/UserDashboard.php");
require './src/Tools/ArrayMapperProduct.php';
require './src/Tools/ArrayMapperSeller.php';
require './src/models/UsersManager.php' ;


$header = new Header("Acceuil", isset($_SESSION['is_user']));
$dashboard = new UserDashboard($_SESSION['user_type'],$_SESSION['user_id']);
echo $header->display_header();
?>
<h1>Bonjour <?php echo $_SESSION['name'] ;?> </h1>
<form class="" id="add-product-form" action="" method="post">
  <div class="form-group col-3">
    <label for="product_name">Nom du produit</label>
    <input class="form-control" type="text" name="product_name" value="">
    <label for="product_price"></label>
    <input class="form-control" type="text" name="product_price" value="">
    <label for="stock">Stock</label>
    <input class="form-control" type="number" name="product_stock" value="">
  </div>
  <div class="form-group">
    <input type="hidden" name="user" value="<?php echo $_SESSION['user_id'] ?>">
    <input type="submit" id="btn-add-product" name="" value="ajouter">
  </div>
</form>
<table>
    <thead>
        <tr>
            <th colspan="2">N°</th>
            <th colspan="2">Nom</th>
            <th colspan="2">Prix</th>
            <th colspan="2">Stock</th>
        </tr>
    </thead>
    <tbody>
        <!-- TODO get table -->
    </tbody>
</table>

<?php

$footer = new Footer();
$footer->addScripts('<script type="text/javascript" src="./../../assets/js/script.js"></script>');
echo $footer->getFooter();
?>
