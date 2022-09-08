<?php
class ParentRegister extends Database
{
    public $title;
    public $full_name;
    public $main_phone;
    public $alt_phone;
    public $email;
    public $home_address;


    public $table = "parent_register";

    public function parentInfo($condition = "", $field = "*", $column = "")
    {
        $this->lookUp($this->table, $field, $condition, $column);
    }

    public function countParentRow($condition)
    {
        return $this->countRows($this->table, "*", $condition);
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


    public function validateParent()
    {

        if (Fun::checkEmptyInput([$this->title, $this->full_name, $this->main_phone, $this->alt_phone, $this->email, $this->home_address])) {
            Fun::redirect("../../View/Parent_Register/parent.php", 'err', 'None Of The Fields Must Be Empty!');
            exit;
        }

        if ($this->isExist("email =  '$this->email'")) {
            Fun::redirect("../../View/Parent_Register/parent.php", 'err', 'This Parent Already Exists!');
            exit;
        }

        if (is_numeric($this->full_name)) {
            Fun::redirect('../../View/Parent_Register/parent.php', 'err', 'Full Name Must Not Be Numeric!');
            exit;
        }
        if ((!is_numeric($this->main_phone)) || (!is_numeric($this->alt_phone))) {
            Fun::redirect('../../View/Parent_Register/parent.php', 'err', 'Phone Number Must Be Numbers Only!');
            exit;
        }

        if ((strlen($this->main_phone) !== 11)) {
            Fun::redirect('../../View/Parent_Register/parent.php', 'err', 'Phone Number Must Be 11 Digits!');
            exit;
        }

        if ((strlen($this->alt_phone) !== 11)) {
            Fun::redirect('../../View/Register/parent.php', 'err', 'Phone Number Must Be 11 Digits!');
            exit;
        }
        Fun::redirect("../../View/Parent_Register/parent.php", 'succ', 'Registration Successful!');
    }
    public function processParent($title, $full_name, $main_phone, $alt_phone, $email, $home_address)
    {
        $this->title = $title;
        $this->full_name = $full_name;
        $this->main_phone = $main_phone;
        $this->alt_phone = $alt_phone;
        $this->email = $email;
        $this->home_address = $home_address;

        $this->validateParent();
        $this->saveParentInfo();
    }

    public function saveParentInfo()
    {
        $this->save($this->table, "title = '$this->title', full_name = '$this->full_name', main_phone = '$this->main_phone', alt_phone = '$this->alt_phone', email = '$this->email', home_address = '$this->home_address'");
    }
}
