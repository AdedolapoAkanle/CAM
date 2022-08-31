<?php

class User extends Database
{
    public $name;
    public $username;
    public $pwd;
    public $table = "user";
    public $result;

    public function userInfo($condition = "", $field = "*", $column = "")
    {
        $this->lookUp($this->table, $field, $condition, $column);
    }

    public function countUserRows($conditions)
    {
        return $this->countRows($this->table, "*", $conditions);
    }

    public function isExists($conditions)
    {
        $rlt = $this->countUserRows($conditions);
        if ($rlt > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function singleUserInfo($id)
    {
        $this->result = $this->userInfo("id = '$id'");
        $this->name = $this->result['name'];
        $this->username = $this->result['username'];
        $this->pwd = $this->result['pwd'];
    }

    public function validateUser()
    {
        if (Fun::checkEmptyInput([$this->name, $this->username, $this->password])) {
            Fun::redirect("", "error", "None of the fields must be empty!");
        }

        if (is_numeric($this->name) || is_numeric($this->username)) {
            Fun::redirect("", "error", "Name or type must be in text only!");
        }

        if (($this->isExists("name = '$this->name'")) && ($this->isExists("username = '$this->username'"))) {
            Fun::redirect("", "error", "This name or username already exists!");
        }
    }

    public function processUser($name, $username, $pwd)
    {
        $this->name = $this->escape($name);
        $this->username = $this->escape($username);
        $this->pwd = $this->escape($pwd);

        $this->validateUser();
        $this->saveUser();
    }

    public function saveUser()
    {

        $this->save($this->table, "name = '$this->name', username = '$this->username', pwd = '$this->pwd'");
    }
}