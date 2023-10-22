<?php

$Posts = new PostCtrl('posts');

if (isset($_GET['post'])) {
    $id = Validar::vlt_Int($_GET['post']);
    $post = $Posts->getById(array('id' => $id));
    include('views/partials/post.view.php');
} else {
    include('views/partials/404.view.php');
}
