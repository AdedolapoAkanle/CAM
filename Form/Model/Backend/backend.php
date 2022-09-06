<?php

use function PHPSTORM_META\registerArgumentsSet;

require('../../../Form/Model/Database/database.php');
require("../../Controller/Classes/User/user.php");
require("../../Controller/Classes/User/signin.php");
require("../../Controller/Classes/parentRegister.php");
require('../../Controller/CommonFunction/function.php');


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