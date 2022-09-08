<?php

class Login extends Database
{

    public $email;
    public $password;


    public $parentTable = "register_parent";

    public function parentInfo($condition = "", $fields = "*", $column = "")
    {
        $this->lookUp($this->parentTable, $fields, $condition, $column);
    }

    public function countParentRow($condition)
    {
        return $this->countRows($this->parentTable, "*", $condition);
    }

    public  function checkParentpassword($condition)
    {
        $this->countParentRow($condition);
    }

    public function isExist($condition)
    {
        $rlt = $this->countParentRow($condition);
        if ($rlt > 0) {
            return true;
        } else {
            return false;
        }
    }
}