<?php

$page = isset($_GET['page']) ? (int) $_GET['page'] - 1 : 0;

$PaginacionPost = new Pagination('posts', 2, $page);
$posts = $postCtrl->raw('SELECT * FROM posts ' . $PaginacionPost->getLimit());

include_once 'views/partials/table-posts.view.php';