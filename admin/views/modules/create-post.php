<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $postCtrl = new PostCtrl('posts');

  var_dump($_POST);


  $title = $_POST['titulo'];
  $content = $_POST['text'];



  if ($postCtrl->insert(array('titulo', 'texto', 'autor', 'slug'), array($title, $content, $_SESSION['user'], Funciones::slugify($title)))) {

    Funciones::sweetAlert2(
      array(
        'icon' => 'success',
        'title' => 'Post creado correctamente',
        'text' => 'El post se ha creado correctamente',
        'redirect' => 'posts'
      )
    );


  }
}

include_once 'views/partials/create-post.view.php';