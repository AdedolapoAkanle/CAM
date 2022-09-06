<?php
class ParentRegister extends Database
{
    public $surname;
    public $first_name;
    public $email;
    public $password;


    public $parentTable = "register_parent";

    public function parentInfo($condition = "", $field = "*", $column = "")
    {
        $this->lookUp($this->parentTable, $field, $condition, $column);
    }

    public function countParentRow($condition)
    {
        return $this->countRows($this->parentTable, "*", $condition);
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


    public function validation()
    {
        // require("");
        if (Fun::checkEmptyInput([$this->surname, $this->first_name, $this->email, $this->password])) {
            Fun::redirect("register.php", 'err', 'None Of This Field Must Be Empty!');
            exit;
        }
        if ($this->isExist("surname =  '$this->surname'")) {
            Fun::redirect('../../Register/register.php', 'err', 'Surname Already Exist!');
            exit;
        }
        if ($this->isExist("email =  '$this->email'")) {
            Fun::redirect('../../Register/register.php', 'err', 'Email Already Exist!');
            exit;
        }
        if (is_numeric($this->first_name)) {
            Fun::redirect('../../Register/register.php', 'err', 'First Name Must Not Be Numeric!');
            exit;
        }
        if (is_numeric($this->surname)) {
            Fun::redirect('../../Register/register.php', 'err', 'Surname Must Not Be Numeric!');
            exit;
        }
        Fun::redirect('../../Register/register.php', 'succ', 'Submission Successful!');
    }
    public function processParent($surname, $first_name, $email, $password)
    {
        $this->surname = $surname;
        $this->first_name = $first_name;
        $this->email = $email;
        $this->password = $password;
        $this->validation();

        $this->saveParentInfo();
    }

    public function saveParentInfo()
    {
        $this->save($this->parentTable, "surname = '$this->surname', first_name = '$this->first_name', email = '$this->email', password = '$this->password'");
    }
}