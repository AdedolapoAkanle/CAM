<?php
class ChildRegister extends Database
{
    public $full_name;
    public $parent_id;
    public $address;
    public $dob;
    public $gender;
    public $table = "child_register";

    public function childInfo($condition = "", $field = "*", $column = "")
    {
        $this->lookUp($this->table, $field, $condition, $column);
    }

    public function countChildRow($condition)
    {
        return $this->countRows($this->table, "*", $condition);
    }

    public function isExist($condition)
    {
        $rlt = $this->countChildRow($condition);
        if ($rlt > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function validateChild()
    {

        if (Fun::checkEmptyInput([$this->full_name, $this->parent_id, $this->address, $this->dob, $this->gender])) {
            Fun::redirect("../../View/Child_Register/child.php", 'err', 'None Of The Fields Must Be Empty!');
            exit;
        }

        // if (($this->isExist("full_name =  '$this->full_name'")) && ($this->isExist("email =  '$this->email'"))) {
        //     Fun::redirect("../../View/Parent_Register/parent.php", 'err', 'This Parent Already Exists!');
        //     exit;
        // }

        if (is_numeric($this->full_name)) {
            Fun::redirect('../../View/Child_Register/child.php', 'err', 'Full Name Must Not Be Numeric!');
            exit;
        }
        if (!is_numeric($this->parent_id)) {
            Fun::redirect('../../View/Child_Register/child.php', 'err', 'Parent_id Number Must Be Numbers Only!');
            exit;
        }

        if ((strlen($this->parent_id) !== 11)) {
            Fun::redirect('../../View/Child_Register/child.php', 'err', 'Parent_id Number Must Be 11 Digits!');
            exit;
        }

        Fun::redirect("../../View/Child_Register/child.php", 'succ', 'Registered Successfully!');
    }
    public function processChild($full_name, $parent_id, $address, $dob, $gender)
    {
        $this->full_name = $full_name;
        $this->parent_id = $parent_id;
        $this->address = $address;
        $this->dob = $dob;
        $this->gender = $gender;

        $this->validateChild();
        $this->saveChildInfo();
    }

    public function saveChildInfo()
    {
        $this->save($this->table, "full_name = '$this->full_name', phone = '$this->phone', address = '$this->address', dob = '$this->dob', gender = '$this->gender'");
    }
}