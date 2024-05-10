<?php

class RutaCtrl
{
    static public function url($params = "")
    {
        $env = parse_ini_file('.env');

        return $env['DOMAIN'] . $params;
    }
}
