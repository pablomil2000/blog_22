<?php

$PostCtrl = new PostCtrl('posts');
$UserCtrl = new UserCtrl('users');


$url = explode("/", $_GET["url"]);
$goto = '404';

if (isset($url[1]) && $url[1] != '') {
    $goto = 'post';
    $post = $PostCtrl->getById(array('slug' => $url[1]));
}


include 'views/partials/' . $goto . '.view.php';