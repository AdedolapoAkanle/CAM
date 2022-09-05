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

    public function singleUserInfo($id)
    {
        $this->result = $this->userInfo("id = '$id'");
        $this->email = $this->result['email'];
        $this->password = $this->result['password'];
    }

    public function validateUserSignIn()
    {

        if (Fun::checkEmptyInput([$this->email, $this->password])) {
            Fun::redirect("../../View/User/signin.php", "err", "None of the fields must be empty!");
            exit;
        }

        if (($this->isExists("email = '$this->email'")) && $this->isExists("password='$this->password'")) {
            Fun::redirect("../parentRegister.php", "succ", "Login Successful!");
            exit;
        } else {
            Fun::redirect("../../View/User/signin.php", "err", "Incorrect Email Or Password!");
        }
    }

    public function processUserSignIn($email, $password)
    {
        $this->email = $this->escape($email);
        $this->password = $password;

        $this->validateUserSignIn();
    }
}