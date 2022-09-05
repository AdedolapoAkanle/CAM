<?php

class Users extends Database
{
    public $name;
    public $email;
    public $password;
<<<<<<< HEAD
    public $table = "signup";
=======
    public $table = "users";
>>>>>>> c162afd8f47cd9729bf16ccb78b5022c337a89a7
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
        $this->email = $this->result['email'];
        $this->password = $this->result['password'];
    }

    public function validateUser()
    {

        if (Fun::checkEmptyInput([$this->name, $this->email, $this->password])) {
            Fun::redirect("../../View/User/signup.php", "err", "None of the fields must be empty!");
            exit;
        }

        if (is_numeric($this->name) || is_numeric($this->email)) {
            Fun::redirect("../../View/User/signup.php", "err", "Name or email must be in text only!");
            exit;
        }

        if (($this->isExists("name = '$this->name'")) && ($this->isExists("email = '$this->email'"))) {
            Fun::redirect("../../View/User/signup.php", "err", "This name or email already exists!");
            exit;
        }

        if (strlen($this->password) < 8) {
            Fun::redirect("../../View/User/signup.php", "err", "Your Password Must Contain At Least 8 Characters!");
            exit;
        }

        if (!preg_match('@[A-Z]@', $this->password)) {
            Fun::redirect("../../View/User/signup.php", "err", "Your Password Must Contain At Least 1 Capital Letter!");
            exit;
        }

        if (!preg_match('@[a-z]@', $this->password)) {
            Fun::redirect("../../View/User/signup.php", "err", "Your Password Must Contain At Least 1 Lowercase Letter!");
            exit;
        }

        if (!preg_match('@[0-9]@', $this->password)) {
            Fun::redirect("../../View/User/signup.php", "err", "Your Password Must Contain At Least A Number!");
            exit;
        }

        Fun::redirect("../../View/User/signin.php", "succ", "Saved Successfully!");
    }

    public function processUser($name, $email, $password)
    {
        $this->name = $this->escape($name);
        $this->email = $this->escape($email);
<<<<<<< HEAD
        $this->password = $this->escape(($password));
=======
        $this->password = $password;

>>>>>>> c162afd8f47cd9729bf16ccb78b5022c337a89a7
        $this->validateUser();
        $this->saveUser();
    }

    public function saveUser()
    {
<<<<<<< HEAD
        $this->save($this->table, "name = '$this->name', email = '$this->email', password = '$this->password'");
=======
        $pwd = sha1($this->password);
        $this->save($this->table, "name = '$this->name', email = '$this->email', password = '$pwd'");
>>>>>>> c162afd8f47cd9729bf16ccb78b5022c337a89a7
    }
}
