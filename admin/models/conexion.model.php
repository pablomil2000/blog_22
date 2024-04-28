<?php

class Conexion
{
    static public function conectar()
    {
        $bdTypee = 'MySQL';

        switch ($bdTypee) {
            case 'MySQL':

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "blog";

                $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conexion->exec("set names utf8");

                break;

            case 'SQLite':
                $servername = "libsql://kvl-bot-pablomil2000.turso.io";
                $id = "966872c0-6403-49d4-8876-4598d15de5a5";

                $conexion = new PDO("$servername", $id);

                break;

            default:
                die('No se ha seleccionado un tipo de base de datos');
        }

        return $conexion;
    }
}


