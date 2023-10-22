<?php

$Users = new UserCtrl('Users');
$usuarios = $Users->getAll();
$misRoles = new tiene_rolCtrl('tienen_roles');
$rol = new RolCtrl('roles');
include('views/partials/usuarios.view.php');
