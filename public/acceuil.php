<?php
include("./public/includes/Header.php");
include("./public/includes/Footer.php");
$header = new Header("Acceuil", isset($_SESSION['is_user']));
echo $header->display_header();
$footer = new Footer();
echo $footer->getFooter();
?>
