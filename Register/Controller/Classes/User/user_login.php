<?php

class SignIn extends Database
{
    public $email;
    public $password;
    public $table = "users";
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

    public function validateUserSignIn()
    {
        $pwd = sha1($this->password);

        if (Fun::checkEmptyInput([$this->email, $this->password])) {
            Fun::redirect("../../View/User/login.php", "err", "None of the fields must be empty!");
            exit;
        }


        if (($this->isExists("email = '$this->email'")) && ($this->isExists("password='$pwd'"))) {

            $this->lookUp($this->table, "*", "email='$this->email'");
            Fun::redirect("../../View/Child_Register/child.php", "succ", "Login Successful!");
            exit;
        } else {
            Fun::redirect("../../View/User/login.php", "err", "Incorrect Email Or Password!");
            exit;
        }
    }

    public function processUserSignIn($email, $password)
    {

        $this->email = $this->escape($email);
        $this->password = $password;

        $this->validateUserSignIn();
    }
}