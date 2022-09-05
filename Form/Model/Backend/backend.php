<?php

use function PHPSTORM_META\registerArgumentsSet;

require('../../../Form/Model/Database/database.php');
require("../../Controller/Classes/User/user.php");
require("../../Controller/Classes/User/signin.php");
require('../../../Form/Controller/Classes/parentRegister.php');
require('../../Controller/CommonFunction/function.php');


// if (isset($_POST['signup'])) {
//     $signup = new Signup();
//     $signup->processUser($_POST['name'], $_POST['email'], $_POST['password']);
// }


if (isset($_POST['signup'])) {
    $user = new Users();

    $user->processUser($_POST['name'], $_POST['email'],  $_POST['password']);
}

if (isset($_POST['signin-btn'])) {
    $sign = new SignIn();

    $sign->processUserSignIn($_POST['email'],  $_POST['password']);
}