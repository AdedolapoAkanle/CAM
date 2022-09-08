<?php

use function PHPSTORM_META\registerArgumentsSet;

session_start();
require('../../../Register/Model/Database/database.php');
require("../../Controller/Classes/User/user_register.php");
require("../../Controller/Classes/User/user_login.php");
require("../../Controller/Classes/parent_register.php");
require("../../Controller/Classes/child_register.php");
require('../../Controller/Common_Function/function.php');

if (isset($_POST['register-btn'])) {
    $register = new ParentRegister();
    $register->processParent($_POST['title'], $_POST['full_name'], $_POST['main_phone'], $_POST['alt_phone'], $_POST['email'], $_POST['home_address']);
}


if (isset($_POST['signup'])) {
    $user = new Users();

    $user->processUser($_POST['name'], $_POST['email'],  $_POST['password']);
}

if (isset($_POST['signin-btn'])) {
    $sign = new SignIn();

    $sign->processUserSignIn($_POST['email'],  $_POST['password']);
}

if (isset($_POST['save-child'])) {
    $child = new ChildRegister;

    $child->processChild($_POST['full_name'],  $_POST['phone'], $_POST['address'], $_POST['dob'], $_POST['gender']);
}