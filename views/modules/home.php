<?php
$MAXIMO_PALABRAS = 9;
$Posts = new PostCtrl('posts');
$Users = new UserCtrl('users');

$page = 0;


if (isset($_GET['page'])) {
    $page = Validar::vlt_Int($_GET['page']) - 1;
}
$PaginacionPost = new Pagination('posts', 1, $page);


$limit = $PaginacionPost->getLimit();
// var_dump($limit);
$posts = $Posts->rawSql('', '', $limit);


include ('views/partials/home.view.php');
