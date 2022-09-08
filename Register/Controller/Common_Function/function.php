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

    public static function dynamicDropdown($name, $table, $label, $title, $condition = "", $value = "id", $class = "", $fields = "*")
    {

        $db = new Database();
        $data = $db->lookUp($table, $fields, $condition);

        echo "<select id = '$name' name = '$name' class='$class'>";
        echo "<option value =''>Select $title</option>";

        foreach ($data as $rlt) {
            $lab = $rlt[$label];
            $val = $rlt[$value];
            echo "<option value ='$val'>$lab</option>";
        }
        echo "<select/>";
        echo "<br>";
    }
}