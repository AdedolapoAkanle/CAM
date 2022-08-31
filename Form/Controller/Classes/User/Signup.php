<?php

// class Signup extends Database
// {
//     public $name;
//     public $email;
//     public $password;

//     public $table = 'signup';

//     public function userInfo($condition = "", $field = "*", $column = "")
//     {
//       return  $this->lookUp($this->table, $field, $condition, $column);
//     }

//     public function countUserRow($condition)
//     {
//         return $this->countRows($this->table, "*", $condition);
//     }

//     public function isExists($condition)
//     {
//         $rlt = $this->countUserRow($condition);
//         if ($rlt > 0) {
//             return true;
//         } else {
//             return false;
//         }
//     }

//     public function validations()
//     {
//         if (Fun::checkEmptyInput([$this->name, $this->email, $this->password])) {
//             Fun::redirect('../../View/User/signup.php', 'msg', 'None of this field must be empty');
//             exit;
//         }

//         if($this->isExists("name ='$this->name'")){
//             Fun::redirect('../../View/User/signup.php', 'msg', 'Name already exist');
//             exit;
//         }

//         if($this->isExists("email ='$this->email'")){
//             Fun::redirect('../../View/User/signup.php', 'msg', 'Email already exist');
//             exit;
//         }

//         Fun::redirect('../../View/User/signup.php', 'msg', 'Name');
//     }

//     public function processUser($name, $email, $password)
//     {

//         $this->name = $name;
//         $this->email = $email;
//         $this->password = $password;
//         $this->validations();
//         $this->saveUser();
//     }

//     public function saveUser()
//     {
//        return $this->save($this->table, "name = '$this->name', email = '$this->email', password = '$this->password'");
//     }
// }
