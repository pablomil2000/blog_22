<?php

$user = new UserCtrl('Users');
$tiene_rol = new tiene_rolCtrl('tienen_roles');
$roles = new RolCtrl('Roles');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = Validar::vlt_String($_POST['name']);
    $password = $_POST['password'];

    $login = $user->login(array('nombre' => $username, 'password' => $password));

    if ($login) {


        $misRoles = $tiene_rol->getById(array('user_id' => $login[0]['id']));

        $_SESSION['user'] = $login[0]['id'];
        if (!empty($misRoles)) {
            $_SESSION['rol'] = $misRoles[0]['rol_id'];
        }

        header('location:rolSelect');
    }
}

include ('views/partials/login.view.php');
