<?php

Funciones::isLogin();
$tiene_rol = new tiene_rolCtrl('tienen_roles');
$roles = new RolCtrl('Roles');

$id = $_SESSION['user'];

$mis_roles = $tiene_rol->getById(array('user_id' => $id));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rolForm = $_POST['rol'];
    $rol = $roles->getById(array('id' => $rolForm));
    $_SESSION['rol'] = $rol[0]['id'];
    header('location: ' . $rol[0]['redirect']);

    // var_dump($rol[0]['redirect']);
}

include('views/partials/rolSelect.view.php');
