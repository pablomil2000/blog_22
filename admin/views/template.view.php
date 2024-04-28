<!-- Hero Section Begin -->
<?php
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != '1') {
  Funciones::JsRedirect('../');
  // var_dump($_SESSION);
}

include ('modules/head.php');
include ('modules/header.php');
?>
<!-- Header End -->

<?php
//Controlador de navegacion
$ruta = 'home';

// require_once('views/modules/' . $ruta . '.php');

PlantillaCtr::whiteList(
  'home',
  'posts',
  'logout'
);
?>

<!-- Footer Section Begin -->
<?php
include ('modules/footer.php');
?>
<!-- Footer End -->