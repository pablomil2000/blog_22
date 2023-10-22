<?php

class UserCtrl extends CrudCtrl
{
    public function login($datos, $campos = array(1 => 'nombre', 2 => 'password'))
    {
        $nombre = $datos['nombre'];
        $password = $datos['password'];

        $usuario = $this->getById(array($campos[1] => $nombre));

        if (!empty($usuario)) {
            return $this->getById(array($campos[1] => $nombre, $campos[2] => $password));
        }

        return $usuario;
    }
}
