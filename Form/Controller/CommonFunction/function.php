<?php

class Fun extends Database
{


    public static function redirect($url, $type, $msg)
    {
        return header("Location: $url?$type=$msg");
    }

    public static function checkEmptyInput($params = [])
    {
        for ($i = 0; $i < sizeof($params); $i++) {
            if (!isset($params[$i]) || empty($params[$i])) {
                return true;
            }
        }
        return false;
    }
}
