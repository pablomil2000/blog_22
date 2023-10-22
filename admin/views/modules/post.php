<?php

$Post = new PostCtrl('posts');
$posts = $Post->getAll();

include('views/partials/post.view.php');
