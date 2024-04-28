<?php

class Validar
{
    static public function vlt_String($str)
    {
        if (preg_match('/^[a-zA-Z0-9]*$/', $str)) {
            if ($str != '') {
                error_reporting(E_ERROR | E_PARSE);
                $str = trim(htmlspecialchars(filter_var($str, FILTER_SANITIZE_STRING)));
                return $str;
            }
        }
        return false;
    }


    static public function vlt_Email($str)
    {
        if ($str != '') {
            $str = trim(htmlspecialchars(filter_var($str, FILTER_SANITIZE_EMAIL)));
            return $str;
        }
        return false;
    }

    static public function vlt_Int($int)
    {
        if (preg_match('/^[0-9]*$/', $int)) {
            if ($int != '') {
                return $int;
            }
        }
        return false;
    }
    static public function vlt_checkBox($post_Name)
    {
        if (isset($_POST[$post_Name])) {
            return true;
        }

        return false;
    }
}
