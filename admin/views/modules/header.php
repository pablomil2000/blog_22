<?php

if (isset($_GET['url'])) {
  $url = explode("/", $_GET["url"]);
} else {
  $url[] = 'home';
}

$userCtrl = new UserCtrl('users');
$user = $userCtrl->getById(array('id' => $_SESSION['user']));



include ('views/partials/header.view.php');
