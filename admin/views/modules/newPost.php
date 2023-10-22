<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $posts = new PostCtrl('posts');
    $titulo = Validar::vlt_String($_POST['titulo']);
    $texto = $_POST['texto'];

    if ($titulo != '' && $texto != '') {
        $posts->insert(array('titulo', 'texto', 'autor'), array('titulo' => $titulo, 'texto' => $texto, 'autor' => $_SESSION['user']));
        echo "<script>alert('post creado');window.location.href='post'</script>";
    } else {
        echo "<script>alert('Rellena todos los campos del formulario para crear tu post');</script>";
    }
}

include('views/partials/newPost.view.php');
