<!-- Header start -->
<?php include('views/modules/cabecera.php'); ?>
<!-- Header end -->

<!-- Site wrapper -->
<?php
// var_dump($_SESSION);


include('views/modules/menu.php');

//<!-- Content start -->
PlantillaCtr::whiteList(array('logout'), true, array('usuarios', 'post', 'newPost'));
?>
<!-- Content end -->

<!-- footer start -->
<?php

include('views/modules/footer.php');

?>

<!-- footer end -->