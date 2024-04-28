<?php

$postCtrl = new PostCtrl('posts');

$ruta = '';
if (isset($_GET['url'])) {
  $url = explode('/', $_GET['url']);

  if (isset($url[1])) {
    $ruta = $url[1];
  }
} else {
  $url[] = 'posts';
}

switch ($ruta) {
  case 'new':
    include_once 'views/partials/new-post.view.php';
    break;

  case 'create':
    include_once 'views/modules/create-post.php';
    break;

  case '':
    include_once 'views/modules/table-posts.php';
    break;

  default:
    include_once 'views/modules/get-post.php';
    break;
}
