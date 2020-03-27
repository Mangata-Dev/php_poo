<?php
include("/public/includes/Header.php");
include("/public/includes/Footer.php");
include("./models/UserDashboard.php");
$header = new Header("Acceuil", isset($_SESSION['is_user']));
echo $header->display_header();
?>
<h1>Bonjour <?php echo $_SESSION['name'] ;?> </h1>
<?php
  $dashboard = new UserDashboard($_SESSION['user_type'],$_SESSION['user_id']);
  echo $dashboard->getDashboard();
  $footer = new Footer();
  $footer->addScripts('<script type="text/javascript" src="./../../assets/js/script.js"></script>');
  echo $footer->getFooter();
?>
