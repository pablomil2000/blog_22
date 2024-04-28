<?php

$postCtrl = new PostCtrl('posts');

$page = 0;

if (isset($_GET['page'])) {
  $page = Validar::vlt_Int($_GET['page']) - 1;
}

$PaginacionPost = new Pagination('posts', 1, $page);

$posts = $postCtrl->rawSql('', 'ORDER By id', 'limit 5');

include ('views/partials/home.view.php');