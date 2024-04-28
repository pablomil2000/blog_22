<?php

$ruta = '';
if (isset($_GET['url'])) {
  $url = explode('/', $_GET['url']);

  if (isset($url[1])) {
    $ruta = $url[1];
  }
} else {
  $url[] = 'posts';
}

$postCtrl = new PostCtrl('posts');
$post = $postCtrl->getById(['slug' => $url[1]]);

// var_dump($post);

if (isset($post[0]['id'])) {
  include_once 'views/partials/post.view.php';
} else {
  include_once 'views/modules/404.php';
}