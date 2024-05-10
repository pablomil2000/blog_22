<?php

session_start();
// var_dump($_SESSION);
//? controllers
require_once ('controllers/funciones.controller.php');   //*Core
require_once ('controllers/plantilla.controller.php');   //*Core
require_once ('controllers/ruta.controller.php');        //*Core
require_once ('controllers/crud.controller.php');        //*Core
require_once ('controllers/pagination.controller.php');  //*Core
require_once ('controllers/carrito.controller.php');     //*Core
require_once ('controllers/validar.controller.php');     //*Core

require_once ('controllers/Usuario.controller.php');
require_once ('controllers/rol.controller.php');
require_once ('controllers/tiene_rol.controller.php');
require_once ('controllers/post.controller.php');

//? Modelos
require_once ('models/crud.model.php');  //*Core



PlantillaCtr::load();
